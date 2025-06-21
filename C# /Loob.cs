---------------------------------------------- While ----------------------------------------------
  
using System;
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int a = 5;
            while (a < 10)
                Console.WriteLine("hi");
            Console.ReadKey();
        }
        
    }
}

-------------------------------------------------------------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Enter a number: ");
            int a = Convert.ToInt32(Console.ReadLine());
            while (a < 10)
            {
                Console.WriteLine("hi");
            }
            Console.ReadKey();
        }
        
    }
}

-------------------------------------------------------------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Enter a number: ");
            int a = Convert.ToInt32(Console.ReadLine());
            while (a < 50)
            {
                Console.WriteLine(a);
                a++;
            }
            Console.ReadKey();
        }

    }
}

---------------------------------------------     Do While Loob        ----------------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Enter a number: ");
            int a = Convert.ToInt32(Console.ReadLine());
            do
            {
                Console.WriteLine(a);
                a++;
            }
            while (a < 50);
            Console.ReadKey();
        }

    }
}

---------------------------------------------     For Loob        ----------------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Enter a number: ");
            for(int a=0; a <= 20; a++)
            {
                Console.WriteLine("Hi");
            }
            Console.ReadKey();
        }

    }
}

-----------------------------------------------------------------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Enter a number: ");
            int a = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Your number is " + a);

            for (; a<50; a++)
            {
                Console.WriteLine(a);
            }
            Console.ReadKey();
        }

    }
}

-----------------------------------------------------------------------------------------------------


using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Enter a number: ");
            int a = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Your number is " + a);

            for (; a>3; a--)                               //enter 3 kku mele ulla number
            {
                Console.WriteLine(a);
            }
            Console.ReadKey();
        }

    }
}




