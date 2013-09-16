#include<iostream>

#include<string>

using namespace std;

int main()

{

   int w[50],h[50],i,parea,ar=0,ag=0,ab=0,t,s,ret;

   string c;

   cin>>t;

   while(t--)

   {

      ar=0,ag=0,ab=0,ret=0;

      cin>>c;

      s=c.length();

      for(i=0;i<s;i++)

         cin>>w[i];

      for(i=0;i<s;i++)

         cin>>h[i];

      for(i=0;i<s-1;i++)

      {

         parea=(w[i]*h[i])-(w[i+1]*h[i+1]);

         if(c[i]=='R')

            ar+=parea;

         else if(c[i]=='G')

            ag+=parea;

         else

            ab+=parea;

      }

      parea=(w[i]*h[i]);

      if(c[i]=='R')

            ar+=parea;

      else if(c[i]=='G')

            ag+=parea;

      else

            ab+=parea;

      ret=max(ar,ag);

      ret=max(ret,ab);

      cout<<ret<<"\n";

   }

   return 0;

}
