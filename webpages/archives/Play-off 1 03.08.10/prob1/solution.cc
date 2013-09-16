#include<iostream>

#include<string>

using namespace std;

int main()

{

    
    int s,i,count=0,n;

    string w;

    cin>>n;

    while(n)

    {

            n--;

            cin>>w;

            s=w.length();

            count=0;

                    if(w[0]!='L' && w[0]!='l')

								count++;

					if(w[1]!='I' && w[1]!='i')

								count++;

					for(i=2;i<(s-2);i++)

					{

						if(w[i]!='N' && w[i]!='n')

							count++;

					}

					if(w[i]!='U' && w[i]!='u')

						count++;

					i++;

					if(w[i]!='X' && w[i]!='x')

						count++;

						

					if(s<5)

						cout<<"-1\n";

					else 

						cout<<count<<"\n";

      }

      return 0;

}

						
