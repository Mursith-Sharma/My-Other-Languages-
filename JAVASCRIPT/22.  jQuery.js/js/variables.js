
//////////////////////////////////////////  Read jQuery api for more design and effects  ////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////

$('.H1').text('welcome to jQuery')             // h1 in name change pannal. so ivvaru ella tag inudaiya name ivaru change pannalam
$('li:first').text('changed li 1')            // first & last li inai ivvaru maatralam but matrayathai id or clas use panni matra vendum
$('li:last').text('changed li 3')  

//////////////////////////////////////////////////////////////////////////////////////////

$('.a1').text('1. inside')                       // using class or id

//////////////////////////////////////////////////////////////////////////////////////////

//document.querySelector('h1').style.color = 'red'      // colour change using venila
$('.H1').css('color','blue')                           //colour change using jquery
$('.H1').css('font-size','45px')                        // html design inai text or html entrum css design inai css entrum ida vendum
                        
//////////////////////////////////////////////////////////////////////////////////////////

let jstyle ={                                      // you can use multiple style using easy function
  'background' : 'yellow', 
  'border' : '3px solid red',
  'text-align' : 'center'
}

$('.H1').css(jstyle)

//////////////////////////////////////////////////////////////////////////////////////////

$('.ul2 li').html('i hacked you!!!')                                        // text kku pathilaha html um use pannalam       
$('.ul3 li').html('<a href="https://www.google.com/">google link</a>')       // html inal oru element make panna mudium
$('.uli2').html('i will you <a href="#"> mongo</a>')                          // plain text with a tag

//////////////////////////////////////////////////////////////////////////////////////////

$('.ul2').css('color', 'orange')                                              

//////////////////////////////////////////////////////////////////////////////////////////

$('img').css('width', '250px')

//////////////////////////////////////////////////////////////////////////////////////////

$('#xx').val('something')                                      // change any value

//////////////////////////////////////////////////////////////////////////////////////////

$('#xx').addClass('added')                                      // class add class add aanatha enpathai parkka see my css page.

//////////////////////////////////////////////////////////////////////////////////////////

$('.rmdir').removeClass('rmdir')                                 // class remove

//////////////////////////////////////// Animation with jQuery //////////////////////////////////////////////////

$('.mybtn').on('click',function(){                             // use fadeToggle
  $('.one').fadeToggle(1000)                                   // 1000 mean 1000 milli secoends
})   

//////////////////////////////////////////////////////////////////////////////////////////

$('.mybtn2').on('click',function(){
  $('.two').fadeToggle(1000, function(){                         // click pannumpothu faded entru console il msg kaattum
    console.log('faded')
  });
})

//////////////////////////////////////////////////////////////////////////////////////////

$('.three').on('mouseover',function(){                             // use fadeOut
  $('.three').fadeOut(1000)
})   

//////////////////////////////////////////////////////////////////////////////////////////

$('h2').click(function(){
  $(this).css('background','pink')                                 // h2 inai click pannal bg color maarum
})

//////////////////////////////////////////////////////////////////////////////////////////

$('input').keypress(function(event){
  console.log(event.target.value)                                 // input il type pannuvathai console il google il kaattuvathu pola kattum
})

//////////////////////////////////////////////////////////////////////////////////////////

$('.bold').on('click', function(event){                            // use click or mouseover
  $(this).css('font-weight', 'bold')                         
})