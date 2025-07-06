<?php                                               
                                                   
namespace App\Http\Controllers;                    
use Illuminate\Http\Request;                                                              
class Poscontroller extends Controller        
            
{
 

    public function old(){                                 
        return \redirect()->route('new_url');              // Laravel-ல் இதை "named route redirect" என்பார்கள்.
    }

    public function newurl(){
        return '<h1>new url page</h1>';
    }

    public function index(){
        return view('index');
    }

    public function detail(){
        return view('detail');
    }
} 
?>
