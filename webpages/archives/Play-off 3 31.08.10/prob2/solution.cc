#include<iostream>

#include<string>

using namespace std;

int main()

{

   int t,r,c,i,j;

   string temp="";

   cin>>t;

   while(t--)

   {

      cin>>r>>c;

      for(i=r-1;i>=0;i--)

      {

         temp="";

         for(j=0;j<c;j++)

         {

            if(i%2==0)

            {

               if(j%2==0)

                  temp+='L';

               else

                  temp+='I';

            }

            if(i%2!=0)

            {

               if(j%2!=0)

                  temp+='L';

               else

                  temp+='I';

            }

         }

         cout<<temp<<"\n";

      }

   }

   return 0;

}
