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

////////////////////////////////////////////////////////////////////////////////////////

