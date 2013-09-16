#include <iostream>

#include <cstdlib>

#include <sstream>

#include <string>

#include <vector>

#include <queue>



using namespace std;



int dist[100000];

void solve(vector <int> &switches)

{

    int n=switches.size();

    for(int i=0;i<100000;i++)

        dist[i]=2000000000;

    queue<int> Q;

    dist[1]=0;

    Q.push(1);

    int d=1<<n-1;

    while(!Q.empty())

    {

        int s=Q.front();

        Q.pop();



        if (s==d)

        {

            cout<<(dist[d]-1)<<endl;

            return;

            }

        for(int i=0;i<n;i++)

            if(s & (1<<i) && switches[i] != i)

            {

                int t=s ^ (1<< switches[i]);

                if (dist[t] > dist[s]+1)

                {

                    dist[t]=dist[s]+1;

                    Q.push(t);

                    }

                }

        }

    cout<<"HORRIBLE"<<endl;

    return;

    }



int main()

{



    int n,T,t;

    vector <int> S;

    cin>>T;

    for(int i=0;i<T;++i)

    {

        cin>>n;

        for(int j=0;j<n;++j)

            cin>>t,S.push_back(t);

        solve(S);

        S.clear();

        }



    return 0;

}
