/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int age = 20;
            double weight = 50.4;
            string name = "Mursith";
            char myLetter = 'M';
            bool myBool = true;

            age = 23;                                        //you can change value. but antha data type kku mun const pottal value change aagathu 
                                                             //const int age = 20;
            Console.WriteLine("My Name is");
            Console.WriteLine(name);
            Console.WriteLine("And My Age + weight is");
            Console.WriteLine(age + weight);
            Console.WriteLine("My 1st latter is " + myLetter);
            Console.WriteLine("my age is " + age + " But Still single");

            Console.ReadKey();
        }
    }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int age = 20;
            double weight = 50.4;
            string name = "Mursith";
            char myLetter = 'M';
            bool myBool = true;
            string firstName = "John ";
            string lastName = "cina";
            string fullName = firstName + lastName;

            age = 23;                                        //you can change value. but antha data type kku mun const pottal value change aagathu 
                                                             //const int age = 20;
            Console.WriteLine("My Name is");
            Console.WriteLine(name);
            Console.WriteLine("And My Age + weight is");
            Console.WriteLine(age + weight);
            Console.WriteLine("My 1st latter is " + myLetter);
            Console.WriteLine("my age is " + age + " But Still single");
            Console.WriteLine(fullName);

            Console.ReadKey();
        }
    }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int a = 5, b = 6, c = 7;

            int x, y, z;
            x = y = z = 50;

            Console.WriteLine(a + b + c);
            Console.WriteLine(x + y + z);
            Console.ReadKey();
        }
    }
}
