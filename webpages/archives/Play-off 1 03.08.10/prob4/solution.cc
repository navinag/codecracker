#include<iostream>

#include<vector>

#include<string>

#include<algorithm>

#include<sstream>

using namespace std;



int main()

{

   

    int N,a,i;

    long long int m=1,n=1;

    vector <int> maxn;

    string t;

    cin>>N;

    cin.ignore(256,'\n');

    while(N)

    {

            N--;

            getline(cin,t);

            istringstream ss(t);

            maxn.clear();

            while(ss>>a)

                        maxn.push_back(a);

            sort(maxn.begin(),maxn.end());

            m=1,n=1;

            n=n*maxn[0];

            for(i=1;i<maxn.size();i++)

            {

              n=n*(maxn[i]-i);

              n=n%1000000007;

            }

            cout<<n<<"\n";

    }

    return 0;

}
