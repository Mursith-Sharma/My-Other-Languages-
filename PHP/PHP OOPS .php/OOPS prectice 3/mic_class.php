<?php
//Access specifiers
// 1. public
// 2. private
// 3. protected

class mic
{
    public $brand;
    public $color;
    public $light;
    public $price;
    public $model;       //public $model;          ithai pottu paarungal. ivvaruthan real aaha private moolam secure pannal
   

    public function setlight($lig){          // Setter function
       $this->light = $lig;   

       print($this-> light);               
    }

    private function getmodel(){               // getter function 
       return $this-> model;                   // #1 //
    }      // mic1 -> model;

    public function setmodel($mod){          // Setter function
       $this->model = ucwords($mod);           // ucwords ->அந்த string-இல் உள்ள ஒவ்வொரு வார்த்தையையும் capitalize பண்ணும்    
    }

    public function getmodelaccess(){          // #1 ilulla private method kkana public method than ithu. #1 ilulla private method inai direct aaga use panna mudiyathu
        return $this->getmodel();              // public method use pannal easy aaga database inai hack panna mudium . athanaalthan private method use pannukirom
    }


}
?>