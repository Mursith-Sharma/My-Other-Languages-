php laraval 
1. install wamp or xamp
2. install Laravel using power sell ( Laravel website il link irukkum athai windows power sell il paste panni install pannal)
3. install node js  (check in cmd ->>>  node -v and npm -v )
3. athil ellavatrin version parka mudium like -> php -v , composer -v Laravel
4. go to Laravel folder , click path, type cmd, after cmd kku varum
5. cmd il Which starter kit would you like to install? none , database kku sql kodukkavum, Default database updated. Would you like to run the default database migrations? no ( after we will fix )
6. Would you like to run npm install and npm run build? no ( after we will fix ) <- ithatku node js install pannanum
8. after go to your Laravel folder anha folder inai visuals studio il open pannu
9. athil env file irukkum -> athil db entru ullathil database connection and password matra mudium ( must check )
10. open terminal type this ->> npm install && npm run build	after ->> composer run dev ( server, queue worker, and Vite development server ivatrai start pannuvatathatku)
11. sometime terminal il port il error varum athavathu port continiue aaga run agum. but error ellavittal ivvaru irukkum -> INFO  Server running on [http://127.0.0.1:8000]. 
12. LARAVEL v12.19.3  plugin v1.3.0)  ithil run aagamal error varum vanthal your cmd il ->> php --ini ( ithil php configuration kkuriya path irukkum athai copy pannu )
13. antha path inai file il paste pannaal notepad il open aagum .athil EGPCS inai GPCS aaha matri save panni pin run pannavum
14. athilulla link inai browser il open pannavum like this ->> http://127.0.0.1:8000/
15. after visual cmd ->> php artisan migrate -> enter yes
16. neengal (composer run dev) visual cmd il ittal athil link kidaikkum. virumpiya neraththil opne panlam

-------------------------------------------------------------------------------------------------------------------------------------------------------------------


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
