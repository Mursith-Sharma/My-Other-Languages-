✅ second code is more professional and maintainable.

-------------------------- controller.php    --------------------

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
} 
?>

-------------------------- web.php    ------------------------------

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Poscontroller;                   

Route::get('/old-url',[poscontroller::class, 'old']);
Route::get('/new-something-url',[poscontroller::class, 'newurl'])->name('new_url');

                                   //part 1 code il -> code name மாற்றினால், URL path-லயும் மாற்ற வேண்டி வரும்.
                                   //இப்போது route name-ஐ நீங்கள் மாற்றினாலும், controller-side ல எந்த changes-ும் தேவையில்லை. ✅ url il auto aaga redirect aagum
?>                          

