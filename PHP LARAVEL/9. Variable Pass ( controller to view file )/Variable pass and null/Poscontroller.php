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

?>
