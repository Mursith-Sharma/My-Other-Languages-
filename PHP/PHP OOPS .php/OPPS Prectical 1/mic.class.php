<?php
//Access specifiers
// 1.public
// 2. private
// 3. protected

class mic
{
    public $Brands;
    public $color;
    public $name;
    public $price;

    public function setbrand($brand){
        print($brand);
        print($this->Brands);                 // test.php il mic1 entru sonnal this enpathu mic1 aaha maarum, mic2 entral this enpathu mic2 aaga marum. multiple function code pannuvathai avoid panna use pannukirom. 
    }

}
?>
<!--  
Website il naam 50 mic kalai list panna vendum. ovvoru mic brand & color & name & price diffrent.
structured programming use panni ithatku code pannuvathayin ovvontrukkum thani thani code elutha vendum. it's too long. athai thavirkkave oops concept use pannukirom. & scurity puporse also
-->
