#include<iostream>

#include<algorithm>

#include<string>

#include<vector>

#include<math.h>

using namespace std;

int main()

{

    int ret=0,sum=0,i,n;

    vector <int> a;

    a.resize(5);

    cin>>n;

    while(n)

    {

            n--;

            ret=0;

            for(i=0;i<5;i++)

                            cin>>a[i];

            sort(a.begin(),a.end());

            for(i=0;i<5;i++)

           	{

	            	if(a[i]==a[i+1])

	            	{

		            	sum+=a[i];

		            	continue;

		            }

		            ret=max(ret,sum+a[i]);

		            sum=0;

            }

            cout<<ret<<"\n";

    }

    return 0;

}
