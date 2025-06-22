<?php
//Access specifiers
// 1.public
// 2. private
// 3. protected

class mic
{
    public $brand;
    public $color;
    public $name;
    public $price;

    public function setbrand($brand){
        print($brand);
        print($this->brand);                  
    }

}
?>