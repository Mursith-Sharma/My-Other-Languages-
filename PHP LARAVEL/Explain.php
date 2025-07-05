| விஷயம்         | Already Learn panna PHP                                                        | Laravel                                         |
| ---------------- | --------------------------------------------------------------------------     | ----------------------------------------------  |
| File handling    | `index.php`, `about.php`, `contact.php` மாதிரி ஒவ்வொரு pageக்கும் ஒரு file | எல்லாம் `route`-களில் manage பண்ணலாம்     |

( ore file il ella php filse kkumana route create pannuvom web.php il ) 1 route example -> Route::get('/post',[Poscontroller::class, 'index']);

| Routing          | Direct URL to file (e.g., `about.php`)                                         | Laravel route system-ஐ use பண்ணும்           |
| Logic location   | Page-க்கும் logic mixed (PHP & HTML together)                                   | Controller-ல logic matrum view-ல HTML  use panal|
| Folder structure | Mostly manual                                                                  | Proper MVC structure (Model, View, Controller)  |
| Security         | Manual validation                                                              | Built-in validation, CSRF, Auth, etc            |
| Maintainability  | பெரிய project-க்கு கடினம்                                                   | Organized & scalable                            | 

நீங்க ஒரு Blog Project பண்ணறீங்க அப்படினா: terminal il below ->
php artisan make:controller BlogController  (ithil athatkana logic eluthiya pin web.php il route pannal )

about.php          → resources/views/about.blade.php
contact.php        → resources/views/contact.blade.php
இப்படி ஒவ்வொரு UI page-க்கும் .blade.php files உருவாக்குவோம்.
Laravel-ல இதை View system என்ன சொல்லுவாங்க.
