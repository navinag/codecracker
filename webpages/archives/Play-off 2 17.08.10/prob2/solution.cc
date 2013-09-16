#include <iostream>
#include <cstdio>
#include <cstdlib>
#include <vector>
#include <string>
#include <sstream>
#include <cmath>



using namespace std;



double x,y;


double getDistance(vector <int> &s, vector <string> &d) {

        x=0;

        y=0;

        double a=sqrt(2);

        for (int i=0; i<d.size(); i++) {

            double v=s[i];

            if (d[i]=="NORTH") 

                y=y+v;

            else if (d[i]=="EAST") 

                x=x+v;

            else if (d[i]=="SOUTH")

                y=y-v;

            else if (d[i]=="WEST")

                x-=v;

            else if (d[i]=="NORTHWEST") {

                x-=v/a;

                y+=v/a;

            }

            else if (d[i]=="NORTHEAST") {

                x+=v/a;

                y+=v/a;

            }

            else if (d[i]=="SOUTHWEST") {

                x-=v/a;

                y-=v/a;

            }

            else if (d[i]=="SOUTHEAST") {

                x+=v/a;

                y-=v/a;

            }

        }

        printf("%.9lf\n",sqrt(x*x+y*y));
	return 0;

    }

int main(){
    int n;
    cin>>n;
    for(int i=0;i<n;++i)
    {
            int val,m;
		string inp;
            vector <int> V;
            vector <string> D;
	    cin>>m;
            for(int i=0;i<m;++i)
                    cin>>val,V.push_back(val);
            for(int i=0;i<m;++i)
                    cin>>inp,D.push_back(inp);
            
             getDistance(V,D);   
            }
 return 0;
}   
