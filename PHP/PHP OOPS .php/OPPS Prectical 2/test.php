<?php

include_once 'mic_class.php';
$mic1 = new mic();                             //constracting the object
$mic2 = new mic();

$mic1 -> brand = "earboot ";
$mic2 -> brand = "headset ";

printf($mic1->brand);                         
printf($mic2->brand);                            // apple sonic samsung

$mic1->light = "sonic ";
$mic1->setlight("apple ");
$mic2->setlight("samsung ");
$mic2->light = "sonic ";

printf($mic1->light);                         
printf($mic2->light);   

$mic1->setmodel("mini version");
print($mic1->model);

?>
