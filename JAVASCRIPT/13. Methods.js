////////////////////////////////////////////////  methods /////////////////////////////////////////////////////

let my ={
    title : 'web development',
    author : 'muursith',
    publish : 'SIT',
    price : '2000/= lkr',

    printprice : function(){
        console.log('hi this is from printprice');
    }
}

my.printprice();
console.log(`my course title is ${my.title} price is ${my.price}`);


//console.log  polathan my.printprice();  um console.log aanathu already library il set pannathu.
////////////////////////////////////////////////  /////////////////////////////////////////////////////

let ConSole ={
    title : 'web development',
    author : 'muursith',
    publish : 'SIT',
    price : '2000/= lkr',

    Log : function(){
        console.log('hi this is from printprice');
    }
}

ConSole.Log();
console.log(`my course title is ${ConSole.title} price is ${ConSole.price}`);


//console.log  polathan Console.Log(); um console.log aanathu already library il set pannathu. but ConSole.Log(); aanathu naam oru object aaga create pannathu. 2um ontru polathan
// own function     => ConSole.Log();
// default function => console.log
// so ivvirandume methods than

////////////////////////////////////////////////////////////////////////////////////////////////////////////

let my ={
    title : 'web development',
    author : 'muursith',
    publish : 'SIT',
    price : '2000/= lkr',

    printprice : function(){
        console.log('hi this is from printprice');

},

my : function(){
    console.log(`hi this is from my`);
},

changeprice : function(newprice){
    console.log(this.price=newprice);
}
}

my.changeprice('30000 lkr');
console.log(`my course title is ${my.title}   price is    ${my.price}`)

//////////////////////////////////////////////// Price Change ////////////////////////////////////////////////////////////

