-----------------------------------------   continue   ----------------------------------------------------
using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int i = 0;
            while(i<100)
            {
                i++;
                if(i % 2 == 0)
                {
                    continue;
                }
                Console.WriteLine(i);
            }
            Console.ReadKey();
        }

    }
}

------------------------------------------  Break ---------------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int i = 0;
            while(i<100)
            {
                i++;
                if(i == 50)             
                {
                    break;                //
                }
                Console.WriteLine(i);
            }
            Console.ReadKey();
        }

    }
}

------------------------------------------  Continue & Break ---------------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int i = 0;
            while(i<100)
            {
                i++;

                if (i == 50)
                {
                    break;
                }
                if (i % 2 == 0)             
                {
                    continue;
                }
                Console.WriteLine(i);
            }
            Console.ReadKey();
        }

    }
}

------------------------------------------------------------------------------------------------------

for (int i = 0; i < 10; i++)
{
  if (i == 4)
  {
    continue;
  }
  Console.WriteLine(i);
}

ANS :- 0 1 2 3 5 6 7 8 9 
