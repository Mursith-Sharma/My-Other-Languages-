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
