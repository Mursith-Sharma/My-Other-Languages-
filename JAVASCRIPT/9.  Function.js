
let Hello = ('hi student');                           //Variable Declaring Method:
console.log(Hello);

////////////////////////////////////////////////////////////////

function hello(){                                    //function method
    console.log('hi students');
}

hello();                                             // function il ellavatraium programm pannivittu antha function name inai call pannaalthan output varum

////////////////////////////////////////////////////////////////
 
function helloo(name){                              //function method
    console.log(`hi ${name}`);
}

helloo('Musith');                                  // website il oruvar avar name input pannal output il :- hi mursith varuvathu ivvaruthan 

////////////////////////////////////////////////////////////////


let Hello = ('hi student');                           //Variable Declaring Method:
console.log(Hello);

////////////////////////////////////////////////////////////////

function hello(){                                    //function method
    console.log('hi students');
}

hello();                                             // function il ellavatraium programm pannivittu antha function name inai call pannaalthan output varum

////////////////////////////////////////////////////////////////
 
function helloo(name){                              //function method
    console.log(`hi ${name}`);
}

helloo('Musith');                                  // website il oruvar avar name input pannal output il :- hi mursith varuvathu ivvaruthan 

////////////////////////////////////////////////////////////////

function course(name1 , name2){                              // login form il 1st & last name ivvaru ketkalam
    console.log(`hi ${name1} ${name2} welcome to our course`);
}

course('aathil','ahamed');   

////////////////////////////////////////////////////////////////

function add(num1 , num2){                              // login form il 1st & last name ivvaru ketkalam
    console.log(num1 + num2);
}

add(20+30/2 , 60);   

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

let bye = function(total){
    return(`bye ${total}`)
};
console.log(bye('ihsan'));

//////////////////////////// advanced way use arrow ///////////////////////////////

let hello = (total) => {
    return(`bye ${total}`)               // mostly programmers function kku pathilaaha arrow mark => use pannuvar 2 um same work than pannum
};
console.log(hello('ihsan'));

/////////////////////////////// single line using arrow //////////////////////////////////////

let hi = (total) =>`bye ${total}`;           // simple function kku ithu use pannalam
console.log(hi('ihsan'));

/////////////////////////////////////////////////////////////////////////////////  BIGGINING  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

let Hello = ('hi student');                           //Variable Declaring Method: let or const or var use panlam but diffrent irukku
console.log(Hello);

let math = (3 + 5.8);                         // c programming pola datatype mantion panna thevaiyillai like int, float
console.log(math);
                                        // data type use pannum   language  C, C#, C++, JAVA, GO
                                        // data type use pannatha language JAVASCRIPT, PHP, PYTHON

////////////////////////////////////////////////////////////////////////////////////////////////

function hello()
{
 console.log('yeah buddy');
}
hello();

/////////////////////////////////////////////////////////////////////////////////////////////////

function num(var1,var2){
    console.log( var1 + var2);        
}

num(6,6);

/////////////////////////////////////////////////////////////////////////////////////////////////

let a=4, b=5;
function num(a,b){
    console.log(a + b);                  // type 1
}                                                     // intha 2 type ilum code pannalam

num(a,b);

/////////////////////////////////////////////////////////////////////////////////////////////////

let a=4, b=5;
function num(var1,var2){
    console.log( var1 + var2);           // type 2
}

num(a,b);

/*
naan 2 data eduththullen, athai function moolam var1, var2 enum parameter aaha pass pannukiren
athai argument aaha datavinai vanguki  outpot pannukirathu
Arguments passing: a = 4, b = 5
Function-ல் var1 = 4, var2 = 5 ஆக ஆகிறது.
Argument என்பது function-ஐ call செய்யும்போது function-க்கு அனுப்பப்படும் value ஆகும்.
pin naam eppothu call pannukiromo appothuthan namakku output varum
*/

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                                        Biggest Advantage Of Function

///////////////////////////////////////////////////////
let a = 4;
let b = 5;

// a + b
let sum1 = a + b;
console.log(sum1);     //////////////

let c = 10;
let d = 20;                                            // WITHOUT FUNCTION

// c + d
let sum2 = c + d;
console.log(sum2);    ///////////////

let e = 1;
let f = 2;

// e + f
let sum3 = e + f;
console.log(sum3);   ///////////////

///////////////////////////////////////////////////////

function addNumbers(x, y) {
    console.log(x + y);
}
                                                         // WITH FUNCTION
addNumbers(4, 5);
addNumbers(10, 20);
addNumbers(1, 2);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
