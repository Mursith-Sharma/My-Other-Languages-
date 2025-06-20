using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int n1 = 20;
            int n2 = 30;

            Console.WriteLine(2 == 2);                  // Equal
            Console.WriteLine(2 == 3);
            Console.WriteLine(n1 == n2);
            Console.WriteLine(n1 != n2);                // Not Equal
            Console.WriteLine(n1 < n2);                 // Less than
            Console.WriteLine(n1 > n2);                 //Greater Than
            Console.WriteLine(n1 >= n2);                //Greater than or equal
            Console.WriteLine(2 <= 2);                 //Less than or equal
            Console.ReadKey();
        }
    }
}

