#include<iostream>
#include <cstdio>
using namespace std;
int main()
{
	long long t,n,h;
	cin>>t;
	for(int i=1;i<=t;i++)
	{
		cin>>h>>n;
		h *= 2;
		cout<<"Case "<<i<<": "<<(n*(n+1)*(n+2)-h*(h+1)*(h+2))/6<<endl;
		}
	return 0;
	}