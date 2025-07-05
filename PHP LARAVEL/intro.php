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

-------------------------------- TimeOut  ------------------------------------------------------------------------------------------

server aanathu 300s il auto aaga stop aagum athai thadukka -->>>  process time increase panlam or process time 0 pannalam 0 pannal server aanathu off aagathu

process time increase 
go to composer.json -> config option -> add this below-------------
  
{
    "config": {
        "process-timeout": 900                     // ithil time set panlam or 0 podalam
    }
}

full code below-------------------
  
    "config": {
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true,
        "allow-plugins": {
            "pestphp/pest-plugin": true,
            "php-http/discovery": true
        },
        "process-timeout": 0
    },

------------------------------------------------------------------------------------------------------------------

naam inimel antha code il function use panna koodathu athu wrong athatku pathilaga controller use panna vendum
so open new terminal in your visual ->  php artisan make:controller poscontroller           //poscontroller enpathu ungal controller in name
after -> develop\LARAVEL\blog\app\Http\Controllers\poscontroller.php] created successfully. entru path kattum antha poscontroller file inai open pannavum
