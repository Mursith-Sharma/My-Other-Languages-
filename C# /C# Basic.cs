using System;

namespace alpha
{
  class Program
  {
    static void Main(string[] args)
    {
      Console.WriteLine("Hello World!");    
    }
  }
}

///////////////////////////////////////////////////////////////////////////////////

using System;                  // system enum library function inai (using) use pannal for Console.WriteLine.

namespace alpha                // alpha என்ற பெயரில் namespace உருவாக்கப்பட்டது. class/struct/function-களை குழுவாக அமைக்கும். namespace HelloWorld → code-ஐ logically வகைப்படுத்தும் grouping (ஒரு folder போல).
{
  class Program                // Program என்ற வகுப்பு
  {
    static void Main(string[] args)     // Main method – நிரல் இங்கிருந்து துவங்கும்
    {
      Console.WriteLine("Hello World!");    // திரையில் Hello World! என்று அச்சிடும்
    }
  }
}
