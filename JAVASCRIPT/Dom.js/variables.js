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
})
///////////////////////////////////////////////////////

