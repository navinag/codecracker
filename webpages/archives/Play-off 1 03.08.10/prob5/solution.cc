#include <algorithm>
#include <vector>
#include <string>
#include <iostream>
#include <iomanip>
#define MAXN 64

using namespace std;

double solve(vector <int> &cost, vector <string> &roads)
{
	int N, G;
	bool reach[MAXN][MAXN], gReach[MAXN][MAXN];
	N = cost.size();
	for(int i=0;i<N;++i)
		for(int j=0;j<N;++j)
			reach[i][j] = (roads[i][j] == 'Y');
       
	for(int k=0;k<N;++k)
		for(int i=0;i<N;++i)
			for(int j=0;j<N;++j)
				reach[i][j] |= reach[i][k] && reach[k][j];
   
	for(int i=0;i<N;++i)
		reach[i][i] = true;
	
	G = 0;
	vector<int> group(N, -1);
	vector<int> groupRepr;
	for(int i=0;i<N;++i)
	{
		if (group[i] != -1)
			continue;
		groupRepr.push_back(i);
		for(int j=i;j<N;++j)
		if (reach[i][j] && reach[j][i])
		{
			group[j] = G;
			if (cost[j] < cost[groupRepr.back()])
				groupRepr.back() = j;
			}
		G++;
		}
   
	for(int i=0;i<G;++i)
		for(int j=0;j<G;++j)
			gReach[i][j] = false;
	for(int i=0;i<N;++i)
		for(int j=0;j<N;++j)
			gReach[ group[i] ][ group[j] ] |= reach[i][j];
	for(int i=0;i<N;++i)
		gReach[i][i] = false;
       
	vector<int> inCount(G, 0);
	for(int i=0;i<G;++i)
		for(int j=0;j<G;++j)
			if (gReach[i][j])
				inCount[j]++;
           
	vector<bool> used(N, false);
	for(int i=0;i<G;++i)
		if (inCount[i] == 0)
			used[ groupRepr[i] ] = true;
       
	vector<int> nCost;
	int total = 0, cnt = 0;
	for(int i=0;i<N;++i)
		if (!used[i])
		{
			nCost.push_back(cost[i]);
			}
		else
		{
			total += cost[i];
			cnt++;
			}
     
	sort(nCost.begin(),nCost.end());
	for (int i = 0; i < nCost.size(); i++)
		if (total > nCost[i]*cnt)
			total += nCost[i],cnt++;
		else
			break;
         
	return double(total)/cnt;
	}

int main()
{
	int T,K,val;
	string way;
	vector <int> Cost;
	vector <string> Channel;
	for(cin>>T;T;--T)
	{
		cin>>K;
		for(int i=0;i<K;++i)
			cin>>val,Cost.push_back(val);
		for(int i=0;i<K;++i)
			cin>>way,Channel.push_back(way);
		cout<<fixed<<solve(Cost,Channel)<<endl;
		Cost.clear();
		Channel.clear();
		}
	return 0;
	}