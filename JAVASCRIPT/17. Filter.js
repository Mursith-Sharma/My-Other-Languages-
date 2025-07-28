
let mytoday = [{
    title : 'prayer',
    isdone : 'true'
},
{
    title : 'go to gym',
    isdone : 'false'
},
{
    title : 'play game',
    isdone : 'true',
}];

console.log(mytoday[1]);

///////////////////////////////////////////////////////////////////////////

let today = [{
    title : 'prayer',
    isdone : 'true'
},
{
    title : 'go to gym',
    isdone : 'false'
},
{
    title : 'play game',
    isdone : 'false',
},
{
    title : 'eat',
    isdone : 'true',
}];

let find = today.filter(function(value){                       // value il ovvoru posititon um sellum 0,1,2 
    console.log(value.title);                                  // 0.title, 1.title ena print aagum
}
)
console.log(find)

/////////////////////////////////// true aanathai mattum print panna vendum ////////////////////////////////////////

