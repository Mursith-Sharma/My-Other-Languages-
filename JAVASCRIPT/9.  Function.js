
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
