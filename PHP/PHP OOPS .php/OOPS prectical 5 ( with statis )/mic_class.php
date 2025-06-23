<?php
// Access specifiers
// 1. public
// 2. private
// 3. protected

class mic
{
    public $brand;
    public $color;
    private $light;
    private $price;
    public $model;       //public $model;          ithai pottu paarungal. ivvaruthan real aaha private moolam secure pannal
   
    public static function testfunct(){
        printf("This is a static function, this can be run without object initializtion");
    }


    public function __construct($prc){             // call pannamal run aagum ore function construct function
        printf("constructing object... <br/>");

        $this->price = $prc;
       //print("price is . $this->price.<br>");    // ihai use pannal test.php il kadaisiyilulla 2 print um thevaiyillai. 2 valikalil ontrai use pannalam
    }

    public function setlight($lig){          // Setter function
       $this->light = $lig;   

       print($this-> light);               
    }

    public function setmodel($mod){          // Setter function
    $this->model = ucwords($mod);           // ucwords ->அந்த string-இல் உள்ள ஒவ்வொரு வார்த்தையையும் capitalize பண்ணும்    
    }

    private function getmodel(){               // getter function 
       return $this-> model;                   // #1 //
    }      // mic1 -> model;


    public function getmodelaccess(){          // #1 ilulla private method kkana public method than ithu. #1 ilulla private method inai direct aaga use panna mudiyathu
        return $this->getmodel();              // public method use pannal easy aaga database inai hack panna mudium . athanaalthan private method use pannukirom
    }

    public function getprice(){
        return $this->price;  
    } 
                     
    public function getpriceaccess(){
        return $this->getprice();  
    } 
                     
    public function __destruct(){
        print("Destruct object <br>");         // ithatkaana reason ellam mudinthavudan ram ilirunthu delete aakkum. this is for safty
    }

}
?>
<!-- 
 public ah irunthal 
direct ah access panlam
function moolam access panlam
__construct function moolam access panlam 

private ah irunthal 
direct ah access panna mudiyathu.
function moolam access panlam
__construct function moolam access panlam  -->
