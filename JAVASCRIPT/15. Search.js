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
