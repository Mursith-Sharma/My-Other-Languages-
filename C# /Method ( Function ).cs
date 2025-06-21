using System;

namespace MyApplication
{
    class Program
    {
        static void MyMethod()
        {
            Console.WriteLine("I just got executed!");
            Console.ReadKey();
        }

        static void Main(string[] args)
        {
            MyMethod();
        }
        
    }
}

----------------------------------------------------------------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)       
        {
            alpha();
            Console.ReadKey();
        }


        static void alpha()                     // void -> entha data um return pannathu
        {
            Console.Write("enter your name:  ");
            string name = Console.ReadLine();
            Console.WriteLine("your name: " + name);
        }
    }
}

/*
using System;
👉 இது Console.WriteLine, Console.ReadLine, Console.ReadKey போன்ற முக்கிய functions-ஐ உபயோகிக்க System என்ற namespace-ஐ include செய்கிறது.
இது இல்லையெனில், ஒவ்வொரு function-க்கும் System.Console.WriteLine() என்றே எழுத வேண்டும்.

static void Main(string[] args)
👉 இது C# நிரலின் துவக்கப்புள்ளி (Entry point).
program ஓடும்போது முதலில் இங்கேதான் வரும்.
args என்பது command line arguments-ஐ பெற பயன்படும் (இங்கு பயன்படுத்தவில்லை).

alpha();
👉 இது கீழே எழுதியுள்ள alpha() method-ஐ அழைக்கிறது.
இப்போ control Main()-இலிருந்து alpha() method-க்கு போகும்.

🔽 இப்போது alpha() method-க்குள் நடக்கும் செயல்:
Console.Write("enter your name: ");
👉 இது screen-ல் user-க்கு "enter your name" என்று message காட்டும்.
⚠️ இது Write() method, அதனால் அடுத்த வரிக்கு செல்லாமல், அதே line-இல் user input வரும்.

string name = Console.ReadLine();
👉 இப்போது user பெயரை type செய்து Enter அழுத்தும் வரை காத்திருக்கும்.
user-ன் input "Mursith" என்றால், name என்ற variable-ல் Mursith சேமிக்கப்படும்.

Console.WriteLine("your name: " + name);
👉 இப்போது name variable-இன் மதிப்பை சேர்த்து "your name: Mursith" என்று print பண்ணும்.

🔁 Control Flow (பணியின் ஓட்டம்):
Program Main() method-இல் ஆரம்பிக்கிறது.
alpha() method-ஐ அழைக்கிறது.
alpha() method-இல்:
பெயர் கேட்கிறது
பெயரை சேமிக்கிறது
output print பண்ணுகிறது
பிறகு Main()-க்கு திரும்பி, Console.ReadKey() மூலம் key press காத்திருக்கும்.
🛑 Key press பின்பு?
Program-இன் execution முடிகிறது.
*/

----------------------------------------------------------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("enter your name:  ");
            string name = Console.ReadLine();
            alpha(name);
            Console.ReadKey();
        }
        static void alpha(string user)                     // void -> entha data um return pannathu
        {
            Console.WriteLine("Your name is " + user);
        }
    }
}

----------------------------------------- return function -----------------------------------------------------

using System;

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)       
        {
            string name = alpha("enter your name:  ");
            string mobile = alpha("enter your mobile number:  ");

            Console.WriteLine("your name is: " + name);
            Console.WriteLine("your number is: " + mobile);

            Console.ReadKey();
        }


        static string alpha(string msg)                     // void -> entha data um return pannathu
        {
            Console.Write(msg);
            string data = Console.ReadLine();

            return data;
        }
    }
}

----------------------------------------------------------------------------------------------

using System;

namespace MyApplication
{
  class Program
  {
  
    static void Main(string[] args)
    {
      Console.WriteLine(MyMethod(3));
    }
    static int MyMethod(int x)
    {
      return 5 + x;
    }

  }
}

----------------------------------------------------------------------------------------------

using System;

namespace MyApplication
{
  class Program
  {
    static int MyMethod(int x, int y)
    {
      return x + y;
    }

    static void Main(string[] args)
    {
      int z = MyMethod(5, 3);
      Console.WriteLine(z);
    }
  }
}
