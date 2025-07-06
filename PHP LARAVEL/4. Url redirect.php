--------------------------- web.php----------------------------------------------

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Poscontroller;                    //இது Laravel-க்கு, "Poscontroller" என்ற class எங்க இருக்குது?" என்று சொல்றது.


Route::get('/old-url',[poscontroller::class, 'old']);

Route::get('/new-url',[poscontroller::class, 'newurl']);
?>                          

<!--
| Route      | Method | Action                                              |
| ---------- | ------ | -----------------------------------------------     |
| '/old-ur'  | GET    | Controller-ல 'old()' function-ஐ call பண்ணும்    |
| '/new-url' | GET    | Controller-ல 'newurl()' function-ஐ call பண்ணும் |

so try this url -> http://127.0.0.1:8000/old-url  &  http://127.0.0.1:8000/new-url
-->

--------------------------- controller.php----------------------------------------------

<?php                                               
                                                   
namespace App\Http\Controllers;                    
use Illuminate\Http\Request;                                                              
class Poscontroller extends Controller        
            
{
    public function old(){                        // யாராவது /old-urlக்கு வரும்போது
        return \redirect('/new-url');             // Laravel auto-ஆவா /new-urlக்கு redirect பண்ணும்
    }

    public function newurl(){
        return '<h1>new url page</h1>';
    }
} 
?>

<!--
 💡 எப்படி வேலை செய்யுது?
✅ Step 1:
User browser-ல் /old-url hit பண்ணுகிறார்:
http://127.0.0.1:8000/old-url

✅ Step 2:
Laravel, Poscontroller@old method-ஐ call பண்ணும்:
return \redirect('/new-url');

✅ Step 3:
Laravel user-ஐ **/new-url**க்குப் redirect பண்ணும்.

✅ Step 4:
Poscontroller@newurl execute ஆகும்:
return '<h1>new url page</h1>';

✅ Output:
<h1>new url page</h1>
-->
