////////////////////////////////////////////////  for loob  /////////////////////////////////////////////////////

let come = 'hi'

let go = ['hi', 'how', 123];

let my = {
    title : 'web development',
    author : 'mursith',
    price : '200'
}

console.log(my);                             // rowser il prototype object ena katum
console.log(my.price);

////////////////////////////////////////////////  methods and keyword /////////////////////////////////////////////////////

function hello (name){
    console.log(`hello ${name}`)
};

hello('umar');                             // neengal name i ittal output il hello umar entru katume thavira database il save aahathu


console.log('///////////////////////////////////////////////////////////////////////////////////////////////////////////')


let bye = function(total){                   //but ivaru seivathu than best method. db il save ahum
    console.log(`hi ${total}`)
};           

bye('ilham');


console.log('///////////////////////////////////////////////////////////////////////////////////////////////////////////')


let say = function(total){                   //but ivaru seivathu than best method. db il save ahum
    return(`hi ${total}`)
};           
