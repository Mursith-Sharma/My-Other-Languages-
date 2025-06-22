<?php
//Access specifiers
// 1.public
// 2. private
// 3. protected

class mic
{
    public $brand;
    public $color;
    public $light;
    public $price;
    public $model;       //private $model;          ithai pottu paarungal. ivvaruthan real aaha private moolam secure pannal
   

    public function setlight($lig){          // Setter function
       $this->light = $lig;   

       print($this-> light);               
    }

    public function getmodel(){               // getter function
       return $this-> model;               
    }      // mic1 -> model;

    public function setmodel($mod){          // Setter function
       $this->model = ucwords($mod);           // ucwords ->அந்த string-இல் உள்ள ஒவ்வொரு வார்த்தையையும் capitalize பண்ணும்    
    }


}
?>