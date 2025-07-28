
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
