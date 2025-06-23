<?php

include_once 'mic_class.php';

$mic1 = new mic("<br/> 1000 lkr <br/>");                             //constracting the object
$mic2 = new mic("2000 lkr <br/>");
$mic2 = new mic("3000 lkr <br/>");
$mic2 = new mic("4000 lkr <br/>");
// $mic3 = new mic();

$mic1 -> brand = "sonic ";
$mic2 -> brand = "apple ";

// printf($mic1->brand);                         
// printf($mic2->brand);                            // apple sonic samsung

//$mic1->light = "green ";
$mic1->setlight("yellow ");
$mic2->setlight("white ");
//$mic2->light = "red ";

//printf($mic1->light);                         
//printf($mic2->light);   

$mic1->setmodel("mini version");

print($mic1->getmodelaccess());

print($mic1->getpriceaccess());
print($mic2->getpriceaccess());

?>
