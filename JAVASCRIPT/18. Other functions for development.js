
let phone = {                                                                            // ecommerce price change
    title : 'samsung',
    price : '30000',
    description : function(){
        return `this phone price ${this.price}`
    }
}
console.log(phone.description());

///////////////////////////////////////////////////////////////////////////////////////////////////////////

let converter = (doller) => {                    // user eththanai doller idukiraro athanai silankan price il convert panni thaa vendum
    return doller * 300;
}

console.log(converter(3))

///////////////////////////////////////////////////////////////////////////////////////////////////////////

let converter = (doller) => {                 
    if (typeof doller === 'number'){
        return doller * 185
    }
    else{
        throw Error('please enter number')                // number kku pahilaaga string input pannal error msg show aaga vendum
    }
}
console.log(converter('dsdf'));

///////////////////////////////////////////////////////////////////////////////////////////////////////////

let converter = (doller) => {                   
   return doller * 300
}

try {                                   // correct way for error:- try & catch bcz error aaha yarum type pannal error msg show aagathu sariyaga type pannal mattum work aagum
    console.log(converter(5))
}   catch (error){

}

/////////////////////////////////////////////// final code ////////////////////////////////////////////////////////////

let converter = (doller) => {                   
   return doller * 300
}

try {                                   // e mean error. u can use any letter or word
    console.log(converter(5))
}   catch (e)
{
   console.log(e)
}
