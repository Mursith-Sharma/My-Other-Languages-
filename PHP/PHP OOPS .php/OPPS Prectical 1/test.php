<?php

include_once 'mic.class.php';
$mic1 = new mic();                             //constracting the object
$mic2 = new mic();

$mic1 -> name = "earboot ";
$mic2 -> name = "headset ";

printf($mic1->name);                         
printf($mic2->name);                            // apple sonic samsung

$mic1->Brands = "sonic ";
$mic1->setbrand("apple ");
$mic2->setbrand("samsung ");

?>

<!--   best explain php oops part 2

1. Class Structure (mic.class.php)
+---------------------+
|       Class: mic    |
+---------------------+
| - Brands (public)   |
| - color (public)    |
| - name (public)     |
| - price (public)    |
+---------------------+
| + setbrand($brand)  |
|   - Prints $brand   |
|   - Prints $this->  |
|     Brands          |
+---------------------+

2. Object Instances and Flow (test.php)
+---------------+               +---------------+
|   $mic1       |               |   $mic2       |
+---------------+               +---------------+
| name = "earboot" |            | name = "headset" |
| Brands = "sonic" |            | Brands = ""      |
+---------------+               +---------------+

33333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333

1. Create objects:

$mic1 = new mic()
$mic2 = new mic()

2. Create objects:
$mic1 ────> name = "earboot "
$mic2 ────> name = "headset "

3. Set names:
printf($mic1->name) → Output: "earboot "
printf($mic2->name) → Output: "headset "

4. Set Brands and call setbrand():
$mic1:
- Brands = "sonic "
- setbrand("apple ") → Prints:
  * "apple " (parameter)
  * "sonic " (Brands property)

$mic2:
- Brands not set (empty)
- setbrand("samsung ") → Prints:
  * "samsung " (parameter)
  * "" (empty Brands)

00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
Visual Representation:

+-----------+     +-----------+
|  $mic1    |     |  $mic2    |
+-----------+     +-----------+
| name      |     | name      |
| "earboot" |     | "headset" |
| Brands    |     | Brands    |
| "sonic"   |     | ""        |
+-----------+     +-----------+
     ↓                  ↓
"apple sonic"      "samsung "

000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000

 ithil print or printf or echo moontrum use panlam
 இது mic.class.php file-ல் உள்ள functions, variables, or classes மறுபடியும் load ஆக முயற்சி செய்யும்.
அதனால் fatal error வரும்:
இதைத் தவிர்க்கவே தான் include_once: oruthadavai maaththiram 

இங்கு ஒவ்வொரு object-க்கும் தனிப்பட்ட data set செய்யப்படுகிறது:
mic1.brand = "sonic"
mic2.brand = "apple"

-----------------------------------------------------------------------

include_once 'mic.class.php';  // mic class-ஐ கொண்டு வருகிறோம்

$mic1 = new mic();     // mic1 object உருவாகுது
$mic2 = new mic();     // mic2 object உருவாகுது

$mic1->name = "earboot ";  // mic1-க்கு name கொடுக்கிறோம்
$mic2->name = "headset ";  // mic2-க்கு name கொடுக்கிறோம்

printf($mic1->name);       // mic1 name print
printf($mic2->name);       // mic2 name print

$mic1->brand = "sonic ";           // mic1-க்குள்ளே brand கொடுக்குறீங்க
$mic1->setbrand("apple ");         // mic1-க்கு வெளியிலிருந்து brand கொடுத்து function call பண்ணுறீங்க

-->
