let visit = ['hulk', 'spider','thor','marvel','thanos'];

visit.forEach(function(value , position)
{
    console.log(`${value}   ${++position}`)                                // foreach aanathu function kku visit ilull values, position numbers inai anuppum 
}                                               // one by one aaha value anuppum athavathu muthalil hulk entra value anuppi athan position number inaium anuppum
)

//ithil position number 0zero ilirunthu start pannuvathal athu parpavarukku perfect aaha irukkathu.
// so ivaru ittal -> ${position + 1} or ${++position} ivvaru use pannal 0 udan 1 add aahi 1 ilirunthu start aagum

console.log('//////////////////////////////////////////////')

let months = [
    'January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August',
    'September', 'October', 'November', 'December'
];

months.forEach(function( value , position){
    console.log(` ${value}   ${position + 1} `)                             //eppothum position final il fix panna vendum
})
