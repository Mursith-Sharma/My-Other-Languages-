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

