using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            
            int day = 8;

            switch (day)
            {
                case 1:
                    Console.WriteLine("Monday");
                    break;

                case 2:
                    Console.WriteLine("tuesday");
                    break;

                case 3:
                    Console.WriteLine("wednesday");
                    break;

                case 4:
                    Console.WriteLine("thursday");
                    break;

                case 5:
                    Console.WriteLine("friday");
                    break;

                case 6:
                    Console.WriteLine("sturday");
                    break;

                case 7:
                    Console.WriteLine("sunday");
                    break;

                default:
                    Console.WriteLine("invalid number");
                    break;
            }
            Console.ReadKey();

        }
        
    }
}

-----------------------------------------------    with user input    ----------------------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {

            Console.Write("enter the number 1 to 7 :  ");
            int day = Convert.ToInt32(Console.ReadLine());

            switch (day)
            {
                case 1:
                    Console.WriteLine("Monday");
                    break;

                case 2:
                    Console.WriteLine("tuesday");
                    break;

                case 3:
                    Console.WriteLine("wednesday");
                    break;

                case 4:
                    Console.WriteLine("thursday");
                    break;

                case 5:
                    Console.WriteLine("friday");
                    break;

                case 6:
                    Console.WriteLine("sturday");
                    break;

                case 7:
                    Console.WriteLine("sunday");
                    break;

                default:
                    Console.WriteLine("invalid number");
                    break;
            }
            Console.ReadKey();

        }
        
    }
}

  
