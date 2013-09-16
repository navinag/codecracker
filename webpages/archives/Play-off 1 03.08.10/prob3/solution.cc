#include <vector>

#include <utility>

#include <sstream>

#include <iostream>

#include <iomanip>

#include <cstdio>

#include <cmath>

#include <cstdlib>

#include<algorithm>
using namespace std;



int main()

{

    int N,n,i,j,temp,a;

    vector <int> seq;

    cin>>N;

    cin.ignore(256,'\n');

    string t;

    while(N)

    {

            N--;

            getline(cin,t);

            istringstream ss(t);

            seq.clear();

            while(ss>>a)

                        seq.push_back(a);

      n=seq.size();

      if(n==1)

      {

              cout<<"1\n";

              continue;

      }

      int s[50];

      vector <int> diff,a;

      for(i=0;i<n-1;i++)

      {

                      temp=seq[i+1]-seq[i];

                      if(temp!=0)

                      {

                                 diff.push_back(temp);

                                 a.push_back(temp);

                      }

                      s[i]=1;

      }

      s[n-1]=1;

      n=diff.size();

      if(n==0 || n==1)

      {

              cout<<n+1<<"\n";

              continue;

      }

      for(i=0;i<n;i++)

      {

                      for(j=0;j<n;j++)

                      {

                                      if(j<i)

                                      {

                                             if(a[j]*diff[i]<0)

                                             {

                                                              if((s[j]+1) > s[i])

                                                              {

                                                                          a[i]=diff[i];

                                                                        s[i]=s[j]+1;

                                                              }

                                             }

                                      }

                      }

      }

      cout<<*max_element(s,s+n)+1<<"\n";

    }

    return 0;

}
