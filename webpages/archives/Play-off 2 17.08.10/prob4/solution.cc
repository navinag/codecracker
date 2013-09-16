#include <algorithm>

#include<iostream>

using namespace std;

 

int main()

{

    int t,h,w;

    cin>>t;

    while(t) {

    t--;

    cin>>h>>w;

    long long x = w, y = h;

    long long r = x*(x+1)*y*(y+1)/4;

    for(long long s = 1; s<=min(x,y); ++s) {

      r-=(x-s+1)*(y-s+1);

    }

    cout<<r<<"\n";

  }

};
