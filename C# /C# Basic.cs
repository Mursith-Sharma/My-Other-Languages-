//Capital Small Importent
///////////////////////////////////////////////////////////////////////////////////

using System;                                // system enum library function inai (using) use pannal for Console.WriteLine.

namespace alpha                             // alpha என்ற பெயரில் namespace உருவாக்கப்பட்டது. class/struct/function-களை குழுவாக அமைக்கும். namespace HelloWorld → code-ஐ logically வகைப்படுத்தும் grouping (ஒரு folder போல).
{
  class Program                            // Program என்ற வகுப்பு
  {
    static void Main(string[] args)         // Main method – நிரல் இங்கிருந்து துவங்கும்
    {
      Console.WriteLine("Hello World!");    // திரையில் Hello World! என்று அச்சிடும்
    }
  }
}

//🔸 Program என்ன?
// இது உங்கள் class-க்குப் பெயர்.

// இதை நீங்கள் விருப்பப்படி மாற்றலாம் (Ex: class MyApp, class Student, class HelloApp).

// ஆனால் ஒரு C# console application ஆரம்பிக்க "Main" method உள்ள class-இல் இருந்து தான் இயக்கம் (execution) துவங்கும்.
// ஒரு class = ஒரு பெட்டி,
// Program = அந்த பெட்டிக்கு வைத்துள்ள பெயர்.
// Main() = அந்த பெட்டிக்குள் இருக்கும் முக்கிய சுவிட்ச் (switch).

/*
🔸 static என்றால்:
class kku veliyilirunthu variable oh function oh create pannuvathayin static use pannuvom ( in java )
இந்த method-ஐ object உருவாக்காமல் நேரடியாக class-இல் இருந்து அழைக்க முடியும்.
C# program ஒன்று run ஆகும்போது, compiler class-இன் object உருவாக்கமாட்டது.
அதனால், Main method static ஆக இருக்க வேண்டும்.

Main() method-ஐ compiler நேரடியாக call பண்ணும்.
compiler object create பண்ண மாட்டாது.
அதனால் static இல்லாமல் Main() வேலை செய்யாது.

| சொல்லை     | அர்த்தம்                                                                                          |
| ----------     | --------------------------------------------------------------------------------------            |
| **Class**      | ஒரு மாதிரி (plan/template)                                                                       |
| **Object**     | அந்த class கொண்டு உருவாக்கப்படும் real memory-யில் இருக்கும் பொருள்                      |
| **Static**     | object இல்லாமலே class-இல் இருக்கும் உறுப்புகளை (methods/variables) access செய்ய உதவும்  |

 void என்றால்:
இந்த method எதையும் return செய்யவில்லை.
அதாவது, இது ஒரு result அல்லது value கொடுக்காது, எதையும் திருப்பி அனுப்பாது.

  Main ஏன்?
C#-இல் program எங்கு ஆரம்பிக்க வேண்டும் என்று compiler-க்கு தெரியும், ஏனெனில் அது Main method-ஐ தேடுகிறது.
அதனால், method-க்குப் பெயர் Main ஆக இருக்கவேண்டும்.
பெயரை Start() அல்லது Run() என்று மாற்ற முடியாது – compiler அது தெரிந்துகொள்ள முடியாது.
*/

/////////////////////////////////////////////////////////////////////////////////////////////////

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;                 //thease are library functionn

namespace MyBasicconsoleapp
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("HELLO WORld");                  //🔸 Console.WriteLine(...) → newline உடன் அச்சிடும். console like --> printf
            Console.WriteLine("HELLO WORld22");          
            Console.Write("amithap");                          //🔸 Console.Write(...) → அதே வரியில் தொடரும்
            Console.Write("auncle");
            Console.ReadKey();                                 //🔸 Console.ReadKey() → ஒரு key-யை press செய்ய user-ஐ காத்திருக்கும் (otherwise console close ஆயிடும்)
            Console.Write(5+5);

        }
    }
}

output ---->>>>

HELLO WORld
HELLO WORld22
amithapauncle

// Program என்ற class-ஐ இந்த project-ஐ பயன்படுத்தும் மற்ற class-கள் மட்டும் அணுகலாம்.
// வேறு project-இல் இருந்து இது கண்டிப்பாக access செய்ய முடியாது.
// இந்த Helper class-ஐ வேறு project-இல் இருந்து பயன்படுத்த முடியாது, ஏனெனில் அது internal.


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
