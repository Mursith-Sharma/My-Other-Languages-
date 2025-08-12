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

<?php
  $link = mysqli_connect("localhost", "root","");                   //php udan my sql connect panna (method 1)
  if($link == true)
  {
     echo "connect success";
  }
  else 
  {
    echo "connect fail";
  }
?>

#################################################################################

<?php
  $link = mysqli_connect("localhost", "root","");                    //php udan my sql connect panna (method 2)
  if($link == true)
  {
    die("error : could not connct" . mysqli_connect_error());
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
?>                                                                       // but melulla function il close pannavillai . close paannamalirunthal sql injection adikka mudium will hack//

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


