#include <iostream>

#include <fstream>

#include <cstdio>

#include <string>

#include <sstream>

#include <vector>



using namespace std;



long long gcd(long long a, long long b)

{

    return b == 0 ? a : gcd(b, a%b);

}



int countCommMult(vector <int> a, int lower, int upper)

{



int i;

long long s = 1;

for (i = 0; i < a.size(); i++)

{

  s = s*a[i]/gcd(s, (long long)a[i]);

 if (s > upper) break;

 }

 if (s > upper) return 0;



    return upper/(int)s - (lower-1)/(int)s;



  }





int main()

{

   int n,a,b,k;

    cin>>n;

    for(int i=0;i<n;++i)

    {

        vector <int> T;

        cin>>k;

        for(int j=0;j<k;++j)

            cin>>a,T.push_back(a);

        cin>>a>>b;

        cout<<countCommMult(T,a,b)<<endl;

    }

    return 0;

    }
