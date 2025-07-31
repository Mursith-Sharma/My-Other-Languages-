
document.querySelector('h1').textContent = 'change by JS';
document.querySelector('#li1').textContent = 'change by JS';
document.querySelector('.a1').textContent = 'welcome';

//document:- mean your current webpage ( indexedDB.html)
// querySelector:- ithil any tag/ id/ class name koduththu mantion panlam
// textContent:- இது அந்த h1 element-இன் உள்ளே இருக்கும் text value-ஐ access பண்ணுகிறது.
//இது அந்த h1-இன் உள்ளடக்கத்தை 'change by JS' என்று set பண்ணுகிறது.

document.querySelector('h1').style.color = 'red';
document.querySelector('h1').style.fontFamily = 'aqua';

// style ittal css il seiyakoodiya ella style um seiyalam

//////////////////////////////////////////////////////////////////////////////////////////

let jstyle = {
     'background' : 'yellow',
     'border' : '3px solid blue',                                                     
     'fontFamily' : 'aqua',
     'fontSize' : '40px'
} 
let h1tag = document.querySelector('h1');
       
  h1tag.style.background = jstyle.background;                                                          /////---- WAY 1 ----/////
  h1tag.style.border = jstyle.border;
  h1tag.style.fontFamily = jstyle.fontFamily;
  h1tag.style.fontSize = jstyle.fontSize;

// let h1tag = document.querySelector('h1');
// இது HTML பக்கத்தில் உள்ள முதல் <h1> என்ற எலிமெண்டை (element) தேடுகிறது.
// அந்த எலிமென்ட் h1tag என்ற பெயரில் ஒரு வேரியபிளாக (variable) சேமிக்கப்படுகிறது.
// h1tag.style.background => h1tag variable il ulla 'h1' kku background style inai mele jstyle il kodutthulla background style kku maatru
// same like all

////////////////////////////////////////////  way 2 better //////////////////////////////////////////////

let jstyle1 = {
     'background' : 'rgb(71, 236, 168)',
     'border' : '3px solid blue',
     'fontFamily' : 'aqua',
     'fontSize' : '20px'
}
let litag = document.querySelector('#li1');

for (let key in jstyle1) {                                                                               /////---- WAY 2 ----/////         
  litag.style[key] = jstyle1[key]; 
}

// இது jstyle1 object-இல் உள்ள அனைத்து ்(4) key-களையும் (CSS property names) ஒவ்வொன்றாக loop-ல் பெறுகிறது.
// key என்பது ஒவ்வொரு property name-ஐ (like "background", "border", ...)
// ithu loob aagaiyal ovvontraga eduththu inline css style kodukkirathu
// litag.style[key] = jstyle1[key]; =>>>>   litag variable il ulla '#li1' kku ovvoru key kku kodukkappatta style inai mele jstyle il kodutthulla key style kku maatru
// so way 2 better==========================

//////////////////////////////////////////////////////////////////////////////////////////

 document.querySelectorAll('li').forEach(li => li.innerHTML = 'hi every');       // all li tag ilulla content inai change pannal

// li entra element kku => (arrow function) html content ilulla li kku 'hi every' ena matru. querySelectorAll koduththathal all lkkkum change aagum
// innerHTML   	Inserts/gets HTML content
// textContent	Inserts/gets plain text only

//////////////////////////////////////////////////////////////////////////////////////////

document.querySelectorAll('.ul2 li').forEach(li => li.innerHTML = '<a href="https://google.com">google</a>');

// ithe page il .ul2 ilulla all li kkuum ovvontraga foreeach moolam ovvontrukum a tag varuthu

//////////////////////////////////////////////////////////////////////////////////////////

document.querySelector('.ul3 #word').innerHTML = 'Text <a href="#">link</a>';

// html il tag mattum create panni id or class ittu after java il plain text udan a tag um vara vendum

//////////////////////////////////////////////////////////////////////////////////////////

document.querySelector('img').style.width = '300px';
