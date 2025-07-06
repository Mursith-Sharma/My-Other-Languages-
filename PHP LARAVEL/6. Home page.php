try this 4 steps -->>
1))))))
go to your controller code -------------------------------------------------------------------------------------

<?php                                               
                                                   
namespace App\Http\Controllers;                    
use Illuminate\Http\Request;                                                              
class Poscontroller extends Controller        
            
{
    public function index(){
        return view('index');              // index.blade.php ivvaru full path poda vendiya avasiyamillai
    }
} 
?>

2)))))))))
web.php  code --------------------------------------------------------------------------------------------------

  <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Poscontroller;                   

Route::get('/',[poscontroller::class, 'index']);
?>                          

--------------------------------------------------------------------------------------------------
3))))))))))
after go to resources files -> views -> crate index.blade.php
upload intha link ilulla code -->>
https://github.com/jvlcode/bootstrap-blog-templates/blob/main/index.html

--------------------------------------------------------------------------------------------------
4)))))))
after go to public files -> crate style.css
style.css ilulla code -->>
body {
    background-color: #eba03f;
}
ithai index.blade.php il link pannungal 
 
