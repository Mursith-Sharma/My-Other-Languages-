using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int x = 10, y = 15, z = 5, a = 20, b = 11, c = 10;
               
            x += 25;                              // x = x + 25   --->>>   x = 10 + 25 
            y -= 5;
            z *= 5;
            a /= 10;
            b %= 3;
            c &= 5;

            Console.WriteLine(x);
            Console.WriteLine(y);
            Console.WriteLine(z);
            Console.WriteLine(a);
            Console.WriteLine(b);             // 11/3 -> 3  meethi -> 2
            Console.WriteLine(c);             
            Console.ReadKey();

            //bitwise AND assignment operation 

            //int c = 7;
            //c &= 5;   -->>  c = c & 5   -->>   c = 7 & 5
            //c = 0111 & 0101
            //c = 0101  Answer →  5

        }
    }
}
