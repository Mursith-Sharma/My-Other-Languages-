arithmatic operators (ithai keywords or sympoles aagavum use pnnalam)
1. addition
2. subtraction
2. multiplication
4. divition
5. modules/ reminders

////////////////////////////////////////////////////////////////////////////

let result = 20 + 10;
console.log(result);        //30

result = result -20;
console.log(result);        //10

result = result + 20;
console.log(result);        //30

result = result / 3;
console.log(result);        //10

result = result * 2;
console.log(result);        //20
 
result = result % 3;
console.log(result);        //2
console.log('////////////////////////');        //2

/////////////////////////////// unary operator //////////////////////////////

let nbr = 10;

marks = ++nbr           
console.log(nbr);       //11

marks = nbr++      
console.log(nbr);       //12

marks = nbr--          
console.log(nbr);       //11

marks = --nbr
console.log(nbr);       //10

console.log(marks);      // answer = 10  

/////////////////////////////////////////////////////////////

let text = 'Javascript';
console.log('hello ' + text + '! ' + 404);            // ithil operator aanathu number inai string aaga matrum
console.log(200 - 'dob');                             // NAN output varum (not a number)

console.log(10<30);            // true
console.log(40<30);            // false
console.log(16 >= 15);         //true
console.log(16 >= 16);         //true
console.log(16 == 16);         //true
console.log(16 != 16);         //false

console.log(16 == '16');       //true       en number inaium string inaium equal entru solkirathu:- bcz relational operator string inai number aaga convert pannum
console.log(16 != '16');       //false

////////////////////////////////////////////////////////////////
//Not Operator (ethavathu ontru true aayiun true than answer)

console.log(!true);                      // false
console.log(!false);                    //true
console.log(true || false);             // true
console.log(false || false);            // false
console.log(true || true);             // true
console.log(!false || false);          // true
console.log(false || !true);          // false
console.log(null || true);           // true
console.log('' || 25);               // 25
console.log('hi' || null);           // hi

console.log('/////////////////////////////////////////////////////');
//AND Operator (2 um true aayiun true than answer)            

console.log(true && false);             // false
console.log(false && false);            // false
console.log(true && true);             // true
console.log(!false && true);           // true
console.log(false && !true);           // false
console.log('' && !true);          
console.log('hi' && true);            // true for reason athil somthing value ontru ullathu
console.log('hi' && null);            //null (1 mattum true aahaiyal null print aagum)

console.log('/////////////////////////////////////////////////////');

console.log(!10);                     // false for reason 10 enpathu true but !10 enpathu not true aahaiyal false
console.log(!'ok');                  // false for reason ok enpathu true but !10 enpathu not true aahaiyal false
console.log(!0);                     // true for reason 0 enpathu emty but !0 enpathu not emty(value ullathu entru arththam) aahaiyal true
console.log(!null);                  // null entral value illai but !null entral athil value ullathu so true

console.log('/////////////////////////////////////////////////////');

console.log(undefined || false);     //false
console.log(undefined || false);     //false

console.log(16 === '16');       //false     so data convertion aagamal irukkka java il extra aaha = poduvom
console.log(16 !== '16');       //false

