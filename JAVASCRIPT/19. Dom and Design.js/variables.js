// HTML ilulla object -> 1.head, 2.body
// but athil varum title, h1, span, div tag kalai antha object in child enpom

console.log(document.head)                 // you can view head
console.log(document.body)                // null kaattum. reaseon script inai naam head il use panniyathal. so eppothum script inai body closing kku mel veiikka vendum
console.log(document.documentURI)         // your html irukkum path inai kattum
document.title = 'web development'        // you can change title like this way



///////////////////////// Id select method ///////////////////////////////

let tag = document.getElementById('done');                              // way 1
console.log(tag);

///////////////////////////////////////////////////////

console.log(document.getElementById('done'));                           // way 2

//////////////////////// Class select method ///////////////////////////////

let myclass = document.getElementsByClassName('fix');                   // way 1
console.log(myclass);

///////////////////////////////////////////////////////

console.log(document.getElementsByClassName('fix'));                    // way 1

///////////////////////////////////////////////////////

let normal = document.querySelector('p')                                // id, class illamal oru tag inai use panna vendumaayin querySelector use panna vendum
console.log(normal)                                                     // querySelector use pannal 1st ilulla p tag inai kaattum.

///////////////////////////////////////////////////////

let normal = document.querySelectorAll('p')     
console.log(normal)                                                     // querySelectorAll use pannal all p tag inaium kaattum

///////////////////////////////////////////////////////



let normal = document.querySelector('p')               // 1st ilulla p tag content change aahum
console.log(normal)                                                    
normal.textContent = 'hello everyone'                                      //way 1

/////////////////////////////////////////////////////

let normal = document.querySelector('p').textContent = 'hello everyone'    // way 2

///////////////////////////////////////////////////////


let normal = document.querySelectorAll('p')                              // change all p tag content
normal.forEach((war) => {
   war.textContent = 'changed using foreach in js'


/////////////////////////// external aaga java il irunthu eppadi element create pannuvathu ////////////////////////////

let newtag = document.createElement('p')                                                            // create your element :- p or h1 or span oe etc...
document.querySelector('body').appendChild(newtag).textContent='change successully';                       // antha element ethanudaiya child entru mantion panna vendum?

})
///////////////////////////////////////////////////////


document.querySelector('button').addEventListener('click',()=>{                   // button click pannumpothu addeventlisnter update aagum

    console.log('button is clicked')
})                                                                                // body is (dom). & button is (html tag). click is (event name)

///////////////////////////////////////////////////////////////////////////////////////////////////

document.querySelector('#card').addEventListener('click',(any)=>{                 // buyer somthing product bye ppanna pirahu paid entru varum. before like after liked
    any.target.textContent = 'paid'
})                                               

///////////////////////////////////////////////////////////////////////////////////////////////////

document.querySelector('.change').addEventListener('click',()=>{                  // after click we can change anything like p tag content
    document.querySelector('p').textContent = 'change using button'               // way 1
})                                               

///////////////////////////////////////////////////////////////////////////////////////////////////

document.querySelector('.change').addEventListener('click',(messi)=>{             // way 2
    let ptag = document.querySelector('p')  
    ptag.textContent = 'change by method'
})

///////////////////////////////////////////////////////////////////////////////////////////////////

document.querySelector('.both').addEventListener('click',(messi)=>{  
    messi.target.textContent = 'after',
    document.querySelector('#done').textContent = 'before to after'               // you can change both ( change content & button name)
})

///////////////////////////////////////////////////////////////////////////////////////////////////


document.querySelector('#search').addEventListener('input',(event)=>{             // search pannumpothu every word inaium track panni athatkuriya result search il tharum. like google pola
     console.log(event)
})

///////////////////////////////////// Best method for search ///////////////////////////////////////////////

document.querySelector('#search').addEventListener('input',(event)=>{             // search pannumpothu every word inaium track panni athatkuriya result search il tharum. like google pola
     console.log(event.target.value)
})

///////////////////////////////////////////////////////////////////////////////////////////

function just(){
    let mine = document.querySelector('#view').value;                             // search pannumpothu database ilirunthu varuvathu pola varum
    console.log(mine)
}

///////////////////////////////////////////////////////////////////////////////////////////

function vayathu(){                   
    let ageValue = document.querySelector('#age').value;                         // 18 - 35 age vayahukku ulla  age mattum input vanga vendum
    if( 18<=ageValue && ageValue<=35 ){
     console.log(ageValue);
    }
    else{
     console.log('invalid age');
    }
}

///////////////////////////////////////////////////////////////////////////////////////////

function dom(){                   
    let myValue = document.querySelector('.raa').value;                         // browser il output kattum method
    if(myValue=='neymar' || myValue=='messi' ){
     document.querySelector('.classOne').textContent = 'you only earch thease 2 words'
    }
    else{
     console.log(myValue);
    }
}
