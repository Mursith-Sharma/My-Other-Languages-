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

###########################################################

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

###########################################################


<?php
  $link = mysqli_connect("localhost", "root","");                         // host information parkka mudium
  if($link === true)
  {
    die("error : could not connct" . mysqli_connect_error());
  }
  echo "connect successfully . host info:" . mysqli_get_host_info($link);
?>

###########################################################

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

###########################################################

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


