---------------------------------------------           if condition      -----------------------------------------
using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            if(1 == 1)
            {
                Console.WriteLine("working");
            }
            Console.ReadKey();
        }
    }
}

--------------------------------------------------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("enter your username:  ");
            string username = Console.ReadLine();
            if (username == "alpha")
            {
                Console.WriteLine("Correct username");
            }
            Console.ReadKey();
        }
        
    }
}

-----------------------------------------        if else condition              ---------------------------------------------

  
using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("enter your username:  ");
            string username = Console.ReadLine();
            if (username == "alpha")
            {
                Console.WriteLine("Correct username");
            }
            else
                Console.WriteLine("Incorrect username");
                Console.ReadKey();
        }
        
    }
}


  ------------------------------------------    else if  statment--------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("enter your username:  ");
            string username = Console.ReadLine();
            if (username == "alpha")
            {
                Console.WriteLine("Correct username");
            }
            else if(username == "sigma")
            {
                Console.WriteLine("Correct username");
            }
            else
                Console.WriteLine("Incorrect username");
                Console.ReadKey();
        }
        
    }
}


  --------------------------------------------------------------------------------------
