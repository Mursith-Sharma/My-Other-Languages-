<?php
$j =10;
$i =20;

print($i+$j);                //php aanathu programming aahavum html aahavum work aagum//
$table = 11;
$rows = 100;
$i = 0;

?>

<table border="2">
  
  <tr>
    <th>multiplication</th>
    <th>multiplier</th>
    <th>result</th>
  </tr>

  <?php
  for($i=0; $i<$rows; $i++)
  {
  ?>
  
  <tr>
    <td><?php print($table); ?></td>
    <td><?php print($i); ?></td>
    <td><?php print($i * $table); ?></td>
  </tr>

  <?php
  }
  ?>  

  

</table>

<?php
$color = "red";
echo "My car is  $color"."<br>";                 // echo for otput; $ for variable diclaration.
echo "My house is $color " . "<br>";
echo "My boat is $color" . "<br>";
$x = 5;
$y = 5;
echo $x + $y;
?> 
