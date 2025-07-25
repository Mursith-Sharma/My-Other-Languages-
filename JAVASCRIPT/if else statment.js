let payment =true;

if(payment){
    console.log("payment done");                    //if condition always check true & print that

}
else{
    console.log("payment not valid");
}
//////////////////////////////////////////////////////////////////////////////////////////
let payment =true;
let num = 10>10;
let nbr = 10>=10;

if(payment){
    console.log("payment done");

}
else{
    console.log("payment not valid");
}


if(num){
    console.log("correct");

}
else{
    console.log("wrong");
}

if(nbr){
    console.log("correct");

}
else{
    console.log("wrong");
}}

//////////////////////////////////////  Else If ////////////////////////////////////////////////////

let whoIs = 'students';

if (whoIs == 'admin')
{
    console.log('Hi Admin');
}

else if (whoIs == 'teachers')
{
    console.log('hi teachers');
}

else 
{
    console.log("hi students");
}
//////////////////////////////////////////////////////////////////////////////////////////

let whoIs = 'fatheen';

if (whoIs == 'admin')
{
    console.log('Hi Admin');
}

else if (whoIs == 'teachers')
{
    console.log('hi teachers');
}

else if (whoIs == 'students')
{
    console.log("hi students");
}
else 
{
    console.log("i don't know who you are");
}

////////////////////////////////////// if else and operator////////////////////////////////////////////////////

//netflix il moview parkkavendumaayin athil login panniyirukka vendum & subscription pannirukka vendum athatkaana if else

//netflix il moview parkkavendumaayin athil login panniyirukka vendum & subscription pannirukka vendum athatkaana if else

let logged = true;
let subscription = true;

if(logged && subscription){
    console.log('watch all videos');
}

else{
    console.log('buy now');
}

////////////////////////////////////// if else or operator////////////////////////////////////////////////////

// watch 1st 10 movies (login or subscribe pannirukkanum )

let login = true;
let subscribe = false;

if(login || subscribe){
    console.log('watch all videos');
}

else{
    console.log('do login or subscribe');
}
