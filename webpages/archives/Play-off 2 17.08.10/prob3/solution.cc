#include <vector>

#include <list>

#include <map>

#include <set>

#include <queue>

#include <deque>

#include <stack>

#include <bitset>

#include <algorithm>

#include <functional>

#include <numeric>

#include <utility>

#include <sstream>

#include <iostream>

#include <iomanip>

#include <cstdio>

#include <cmath>

#include <cstdlib>

#include <ctime>



using namespace std;



int main()
{
    int i,flag=0,sum=0,j,r,no,t,b;

    vector <int> ret;

    cin>>t;

    while(t)

    {

            t--;

            cin>>b;

            for(i=2;i<b;i++)

            {

                      for(j=2;j*i<=999;j++)

                      {

                                           flag=0; sum=0;

                                           no=i*j;

                                           while(no!=0)

                                           {

                                            r=no%b;

                                            no=no/b;

                                            sum+=r;

                                           }

                                           if(sum%i!=0)

                                           {

                                                       flag=1;

                                                       break;

                                           }

                      }

                      if(flag==0)

                                 cout<<i<<" ";

            }

            cout<<"\n";

    }

    return 0;

}
