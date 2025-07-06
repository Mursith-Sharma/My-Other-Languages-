<?php                                       // project ilulla folder il routes enum folder il web.php entru irukkum. athil default aaha intha code irukkum

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('welcome');
});

----------------------------------------------------------------------------------------------------------------------

<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {             // test entru change pannal chrome url il ivvaru change panninalthan antha page open aagum -> http://127.0.0.1:8000/test
     return view('welcome');
});

<?php

  -------------------------------------------------------------------------------------------------------------
  
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    // return view('welcome');
    return 'welcome to laravel course';               // intha output show aagum ( try this )
});

------------------------------------------------------------------------------------------------------------------

  <?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {                //http://127.0.0.1:8000
    // return view('welcome');
    return 'welcome to laravel course';
});

route::get('/post',function(){              //http://127.0.0.1:8000/post 
    return "<h1> Post Page <h1>";

});

route::get('/post/detail',function(){       //http://127.0.0.1:8000/post/detail   ivvaru ovvoru page kkum sella mudium
    return "<h1> detail Page <h1>";

});

route::get('/service',function(){       
    return "<h1> service Page <h1>";

});

------------------------------------------------------------------------------------------------------------------

naam inimel antha code il function use panna koodathu athu wrong athatku pathilaga controller use panna vendum
so open new terminal in your visual ->  php artisan make:controller poscontroller           //poscontroller enpathu ungal controller in name
after -> develop\LARAVEL\blog\app\Http\Controllers\poscontroller.php] created successfully. entru path kattum antha poscontroller file inai open pannavum

---------------- controller.php ( poscontroller.php for logic) --------------------------------

<?php                                               
                                                   
namespace App\Http\Controllers;                    
use Illuminate\Http\Request;                                                           
class Poscontroller extends Controller        
            
{

    public function sigma($id){                                                   // intha id il naam url il type pannuvathai vangum
        return "<h1> service Page with parameter: ".$id."<h1>".                   //  string-களை (வாக்கியங்களை) இணைக்க Dot. பயன்படுத்தப்படுது.(already learnde php)
        "<h4> this is new url -->>"."http://127.0.0.1:8000/post/".$id."<h4>";     
    }                                                                            // நீங்கள் $id எப்படினு பெயர் வைக்குறீங்க — அதில் $ இருக்கணும், ஏனெனில் அது PHP variable.
                                                                                  // $name = "Mursith";✅ name = "Mursith";❌
      public function alpha($nbr){                                           
        return "<h1> service Page with parameter: ".$nbr."<h1>";            
    }
                                                                          
}                                                   

---------------- web.php ( for routing) --------------------------------

<?php
     
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Poscontroller;                       //இது Laravel-க்கு, "Poscontroller" என்ற class எங்க இருக்குது?" என்று சொல்றது.

Route::get('/post/{id}',[Poscontroller::class, 'sigma']);     // example type this ->>   http://127.0.0.1:8000/post/20email
                                                              // {id} ida kaaranam naam url il post/ kku pirahu type pannuvathai controler il  $id aanathu variable il semiththu output aaga kattum
Route::get('/paid/{nbr}',[Poscontroller::class, 'alpha'])->where('nbr','[0-9]+');   // number value mattum vendumanal intha code pannavendum. so only accept number.

?>                                                 
