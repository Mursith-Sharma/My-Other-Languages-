-------------------------------------- Php - Mysql Database Connectivity -------------------------------------------
Three - Tier Architecture
01. Presentation tier (browser)
02. Logial tier
⦁	web server ( apache, iis, etc...)
⦁	programming language (java, c, c#, etc..)
⦁	scripting language ( php, perl, etc..)
⦁	application framework ( ruby, bootstrap, etc..)

03. Data tier
⦁	Dbms ( oracle, MySQL, mongodb, MariaDB, etc...)

---------------------------------------  php conect to mysql server -----------------------------------------------
* PHP ofers two difrent ways to connect to mysql
1. mysqli ( improved mysql )
2.PDO ( php data object ) extention

* while the PDO extention is more portable and supports more than twelve diffrent database , mysqli, extension as the name suggests ( watch php 16 video )

----------------------------------------------------------------------------------------------

???????????????????  API ? ???????????????????????????
software innoru software udan or programming innoru programming udan pesuvathatku payanpaduvathu

-------------------------------------  3 way to connect php with mysql ------------------------

1. Procedural Way            $conn = mysqli_connect($servername, $username, $password, $dbname);
2. OOPS ->                   $conn = new mysqli($servername, $username, $password, $dbname);
3. PDO Way                   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

----------------------------------------------------------------------------------------------

MySqli    =>     இது ஒரு PHP Extension — PHP code-ல் இருந்து MySQL database-ஐ connect செய்து, query execute செய்ய உதவும் கருவி.
PDO       =>     PDO என்பது PHP-வில் database-களை connect செய்து, query-களை பாதுகாப்பாக மற்றும் எளிதாக இயக்க உதவும் ஒரு ஒரு abstraction layer ஆகும்.

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

அம்சம்                                            	PDO (PHP Data Objects)                                                                                 	MySQLi (MySQL Improved)

Database Support         	பலவிதமான databases-ஐ support செய்கிறது (MySQL, PostgreSQL, SQLite, MSSQL, Oracle, மற்றவை)                        	MySQL மற்றும் MariaDB மட்டும் support செய்கிறது
API Style	                Object-Oriented API	                                                                                                        Object-Oriented மற்றும் Procedural இரண்டுமே உள்ளது

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

<?php
  $link = mysqli_connect("localhost", "root","");                   //php udan my sql connect panna (method 1) Procedural Way 
  if($link == true)                                                 // ip address irunthal ip localhost kku pathilagan idalam
  {
     echo "connect success";
  }
  else 
  {
    echo "connect fail";
  }
?>

#################################################################################                                          1. Connect pannal

<?php
  $link = mysqli_connect("localhost", "root","");                    //php udan my sql connect panna (method 2)
  if($link == true)
  {
    die("error : could not connct" . mysqli_connect_error());        // die function use panna reason-> "Connection failed: <reason>" என்று print பண்ணி script stop ஆகிடும்.
  }
  else 
  {
    echo "connect fail";
  }
?>

####################################################################################


<?php
  $link = mysqli_connect("localhost", "root","");                         // host information parkka mudium
  if($link === true)
  {
    die("error : could not connct" . mysqli_connect_error());
  }
  echo "connect successfully . host info:" . mysqli_get_host_info($link);
?>

#####################################################################################

<?php
  $link = mysqli_connect("localhost", "root","");
  if($link === true)
  {
    // echo "connect success";
    die("error : could not connct" . mysqli_connect_error());
  }
  echo "connect successfully . host info:" . mysqli_get_host_info($link);
  mysqli_close($link);                                                   //  close kodukka kaaranammysql connect aahivittatha enpathai kaattivittu connection inai udane close pannum //
?>                                                                       <!-- but melulla function il close pannavillai . close paannamalirunthal sql injection adikka mudium will hack-->

########################################################################################

<?php
  $link = mysqli_connect("localhost", "root","");             //database create & connect  
  if($link == true)
  {
    // echo "connect success";
    die("connect successfully" . mysqli_connect_error());
  }
  echo "error : could not connct";

  $sql ="CREATE DATABASE demo";                             // sql il ingirunthe database connect pannalam & create pannalam
  mysqli_query($link,$sql);                                 //$sql il iruppathu query enpathai mantion panna vendum

  mysqli_close($link);

?>

#########################################################################################

<?php
  $link = mysqli_connect("localhost", "root","");
  if($link === false)
  {
    // echo "connect success";
    die("error : could not connct" . mysqli_connect_error());
  }
  echo "connect successfully<br>";

  $sql ="CREATE DATABASE aamko";

  $querycheck = mysqli_query($link ,$sql);
  if($querycheck){                                // php inaium mysql inaium connect pannum oru api function (mysqli_query) , intha function use pannamalum run pannalam
    echo "database created successfully";         //mysqli_query() வேலை செய்தால் → $querycheck = true                                               
  }                                               //வேலை செய்யவில்லை → $querycheck = false
  else{
    echo "Fsiled" . mysqli_error($link);
  }
  mysqli_close($link);
?>


