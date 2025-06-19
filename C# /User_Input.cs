/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("enter your username :- ");
            string usrnme = Console.ReadLine();                               //readline only allow char or string so matraya data type il output edukka convert use pannuvom
            Console.WriteLine("Your username is -> " + usrnme);
            

            Console.Write("enter number 1 :- ");
            int n1 = Convert.ToInt32(Console.ReadLine());
            Console.Write("enter number 2 :- ");
            int n2 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Sum n1 + n2 = " + (n1 + n2));
            Console.ReadKey();
        }
    }
}

//string usrnme      → usrnme என்ற பெயரில் எழுத்துக்களை சேமிக்கும் string il semikka variable உருவாக்குகிறது.
//Console.ReadLine() → console-ல் இருந்து பயனரால் உள்ளிடப்பட்ட வரியை read pannukirathu.
//read panniyathai 3rd code ilull usrnme il output moolam edukkirom
// output entha data formet il vendumo athai ithil maatram seiya vendum --> ToInt32
