let hero = [,'hulk','spider','loki','marvel','thor'];

console.log(hero.indexOf('thor'))                // position number kattum
console.log(hero.indexOf('LOKI'))

////////////////////////////////////////////////////////////////////////////////////////

let hero = ['hulk','SPider','loki','marvel','thor'];

console.log(hero.find(function(value)                   
{  
     console.log(value.toLowerCase() === 'spider')             //oruvar spider entru search pannal ivvaru match aagum and tolower koduththal capital il search pannalum lower convert aahi match aagum
} 
)) 
//match aahinal true um match aagavittal false um kattum
// 'hulk'.toLowerCase() === 'spider' → 'hulk' === 'spider' → false
// 'SPider'.toLowerCase() === 'spider' → 'spider' === 'spider' → ✅ true

////////////////////////////////////////////////////////////////////////////////////////


let fullname = function(fname, lname){
     return `hllo ${fname} ${lname}`
};

let firstname = 'mohamed';
console.log(fullname(firstname,'hassan'));

////////////////////////////////////////////////////////////////////////////////////////

let hero = ['hulk','SPIDER','loki','marvel','thor'];

console.log(hero.find(function(value)                   
{  
     console.log(value.toLowerCase() === 'spider'.toLowerCase)           
} 
))                                          //oruvar spider entru search pannal ivvaru match aagum and tolower koduththal capital il search pannalum lower convert aahi match aagum
                                            // 'SPider' → 'spider', 'spider' → 'spider'
console.log(hero)                           //ஒரு array-யிலிருந்து வந்த value (example: 'SPider')  மற்றொரு fixed value (example: 'spider') so ithanal 2 times tolowercase use pannukirom

///////////////////////////////////// Final Working code ///////////////////////////////////////////////////


let hero = ['hulk','spider','loki','marvel','thor'];

let result = function(herolist, searchitem)
{
    let hero = herolist.find(function(value)
    {
     return value.toLowerCase() == searchitem.toLowerCase()
    })

return hero

}
console.log(result(hero, 'SPider'));

/////////////////////////////////////////// with explaination /////////////////////////////////////////////


let hero = ['hulk','spider','loki','marvel','thor'];                         //1

let result = function(herolist, searchitem)                                  //2
{
    let hero = herolist.find(function(value)
    {
     return value.toLowerCase() == searchitem.toLowerCase()                  //3
    })

return hero                                                                   //4

}
console.log(result(hero, 'SPider'));                                          //5

// 1
// இங்கு hero என்பது ஒரு array.
// இதில இருக்கின்றன: 'hulk', 'spider', 'loki', 'marvel', 'thor'

// 2
// இது ஒரு function expression.
// Function expression என்பது ஒரு function-ஐ variable-ல் assign செய்வது.
// அதை result என்ற variable-க்கு assign பண்ணிருப்பதால் இதை function expression என்கிறோம்.
// இந்த function-க்கு இரண்டு arguments:
// herolist → ஒரு array
// searchitem → தேட வேண்டிய ஒரு word/string

// 3
// herolist.find() என்பது JavaScript array method.
// இது ஒவ்வொரு value-யையும் check பண்ணும்.
//  function(value) { ... }
// இது ஒரு callback function.
// find() இந்த function-ஐ ஒவ்வொரு element-க்கும் call பண்ணும்.
// | value      | value.toLowerCase() |
// | ---------- | ------------------- |
// | `'SPIDER'` | `'spider'`          |
// | `'loki'`   | `'loki'`            |
// searchitem.toLowerCase() use பண்ணுவதால் தான்:
// User capital/small எப்படி type பண்ணாலும்,
// Match பண்ணுறது case-insensitive ஆகும் (smart match).

// 4
// இந்த line-ல், function return பண்ணுறது: 'spider' (match ஆன value)

// 5
// இப்ப result() function call பண்ணுறோம்:
// herolist = hero → ['hulk','spider','loki','marvel','thor']
// searchitem = 'SPider'
// Output → 'spider' தான் console-ல் print ஆகும்.
