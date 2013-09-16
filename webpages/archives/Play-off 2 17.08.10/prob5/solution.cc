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



int recu(vector <int> times, int s)

{

      if(s==1)

              return times[0];

      if(s==2)

              return times[1];

      if(s==3)

              return times[0]+times[1]+times[2];

      if(2*times[1] <= (times[s-2]+times[0]))

      {

                           return times[0]+times[1]*2+times[s-1] + recu(times,s-2);

      }

      else

          return times[0]*2 + times[s-2] + times[s-1] + recu(times,s-2);

}



int main()

{

    int t,out,s,i;

    vector <int> times;

    cin>>t;

    while(t)

    {

            t--;

            cin>>s;

            times.clear();

            times.resize(s);

            for(i=0;i<s;i++)

                            cin>>times[i];

            sort(times.begin(),times.end());

            out=recu(times,s);

            cout<<out<<"\n";

    }

    return 0;

}
