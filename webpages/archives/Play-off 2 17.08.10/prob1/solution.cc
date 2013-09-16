#include<iostream>
#include<algorithm>
#include<vector>
using namespace std;
int main()
{
	int t,n,sum=0,i;
	vector <int> a,b;
	cin>>t;
	while(t)
	{
		t--;
		sum=0;
		cin>>n;
		a.clear(),b.clear();
		a.resize(n),b.resize(n);
		for(i=0;i<n;i++)
			cin>>a[i];
		for(i=0;i<n;i++)
			cin>>b[i];
		sort(a.begin(),a.end());
		sort(b.begin(),b.end());
		reverse(b.begin(),b.end());
		for(i=0;i<n;i++)
			sum+=a[i]*b[i];
		cout<<sum<<"\n";
	}
	return 0;
}
