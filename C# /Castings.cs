/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//ஒரு மாறியின் (variable) தரவு வகையை (data type) இன்னொரு தரவு வகையாக மாற்றுவதே Type Casting 
            /*
            Implicit Casting (automatically) - converting a smaller type to a larger type size
            char -> int -> long -> float -> double

            Explicit Casting(manually) - converting a larger type to a smaller size type
            double -> float -> long -> int -> char

Conversion Type	Allowed Implicitly?	Example
char → int	    ✅ ஆம்	    int a = 'A';
char → float	  ✅ ஆம்	    float f = '4';
char → double 	✅ ஆம்	    double d = '4';
long → int	    ❌ இல்லை	  int i = (int)longVal;
double → float	❌ இல்லை 	float f = (float)doubleVal;
            */



using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            char mango = '4';
            int apple = mango;
            long banana = apple;
            float orange = banana;
            double lambo = orange;

            Console.WriteLine(mango.GetType());
            Console.ReadKey();
        }
    }
}

//////////////////////////////////////////////////////////////////////////

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {

            //Implicit Casting-----------------

            char charoo = '4';                      // data_type variable = value
            int intoo = charoo;                     // char to int
            long longoo = intoo;                    // int to long
            float floatoo = longoo;                 // long to float
            double doubloo = floatoo;               // float to double


            Console.WriteLine(doubloo);                // output 52
            Console.WriteLine(doubloo.GetType());      //GetType() <<--  find data type


            //         Character             ASCII/ Unicode Value
            //            '4'                      52 ✅


            //Explicit Casting-------------------

            //float book = doubloo;               ivvaru seithal error varum
            float floatoo1 = (float)doubloo;           // double to float
            float floatoo2 = (float)charoo;            // float to char

            Console.WriteLine(floatoo1);
            Console.WriteLine(floatoo2);
            Console.ReadKey();
        }
    }
}
