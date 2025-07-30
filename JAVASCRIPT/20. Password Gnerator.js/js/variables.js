
let keyList = 'abcdefghijklmnopqrstuvwxyz!@#$%^&*'

let Password = '';

let generatepass = (pwdlength) =>{
     Password = ''

     for(i=0; i<pwdlength; i++){
          Password+= keyList.charAt(Math.floor(Math.random()*keyList.length))
     }
     return Password;
}

let PasswordGen =(passLn) =>{
   document.output.Password.value = generatepass(passLn)
}