<?php                                               
                                                   
namespace App\Http\Controllers;                    
use Illuminate\Http\Request;                                                              
class Poscontroller extends Controller        
            
{

    public function index(){
        $title = "Mars Tech";
        return view('index', compact ('title'));
    }

    public function detail(){
        return view('detail');
    }
} 

// ✅ $title = "Mars Tech";
// 🔹 இது ஒரு PHP variable
// 🔹 இதில் "Mars Tech" என்ற string assign பண்ணப்பட்டிருக்கு.
// 🔹 இந்த variable-ஐ later-ஆ view-க்கு pass பண்ணபோகிறோம்.

// ✅ return view('index', compact('title'));
// 🔹 இது Laravel-ல் ஒரு view file-ஐ return பண்ணும் statement.
// 🔹 view('index') என்றால் => resources/views/index.blade.php file-ஐ load பண்ணு என்பதற்காக.

// 🔹 compact('title') என்றால்:

// 'title' என்பது variable-ஐ key-ஆக convert பண்ணும்.

// Laravel-க்கு $title என்ற variable-ஐ pass பண்ணும்.
?>
