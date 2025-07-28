
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

////////////////////////////////////////////// Filter start /////////////////////////////////////////////////////

let mytoday = [{
    title : 'prayer',
    isdone : true,
},
{
    title : 'go to gym',
    isdone : false,
},
{
    title : 'play game',
    isdone : true,
}];

console.log(mytoday[1]);

///////////////////////////////////////////////////////////////////////////

let today = [{
    title : 'prayer',
    isdone : true,
},
{
    title : 'go to gym',
    isdone : false,
},
{
    title : 'play game',
    isdone : false,
},
{
    title : 'eat',
    isdone : true,
}];

let find = today.filter(function(value){                       // value il ovvoru posititon um sellum 0,1,2 
    console.log(value.title);                                  // 0.title, 1.title ena print aagum
}
)
console.log(find)

/////////////////////////////////// true aanathai mattum print panna vendum ////////////////////////////////////////

