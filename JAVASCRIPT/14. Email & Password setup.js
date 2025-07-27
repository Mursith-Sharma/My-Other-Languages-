/////////////////////////////////////////////////// Email & passwod  ///////////////////////////////////////////////////

let email = "MurSith@gmail.com";
let password = '123456';

console.log(email.toLowerCase());             // email il tharappaddathia lowercase kku change pannal
console.log(email.includes('@'));             // includes ida reason athil enna symbol ullatho athu irukkriatha enpathai check pannum. email il @ symbole ullatha entru check pannal. after true aagum

/////////////////////////////////////////////////// email  ///////////////////////////////////////////////////

let Email = "MurSith&gmail.com";
let pwd = '123456';

if(Email.includes('@'))
{
    console.log('access granded');
}
else{
    console.log('invalid email');
}       

/////////////////////////////////////////////////// passwors  ///////////////////////////////////////////////////

function password(pwd){
    if(pwd.includes('@') && pwd.length >= 8){
        console.log('access granded');
    }
    else{
        console.log('please enter strong password');
    }
};

(pwd.includes('@') || ('%') || ('#') || ('&'))

password('abcd@1');

/////////////////////////////////////////////////// Strong passwors  ///////////////////////////////////////////////////

function password(pwd) {
    const hasSpecialChar = /[@%#&]/.test(pwd);  // special chars check
    const hasLetter = /[a-zA-Z]/.test(pwd);     // at least one letter
    const hasNumber = /[0-9]/.test(pwd);        // at least one digit

    if (pwd.length >= 8 && hasSpecialChar && hasLetter && hasNumber) {
        console.log('access granted');
    } else {
        console.log('please enter strong password');
    }
}

password('abcd@&53');
