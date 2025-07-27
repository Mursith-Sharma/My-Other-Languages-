/////////////////////////////////////////////////// Email & passwod  ///////////////////////////////////////////////////

let email = "MurSith@gmail.com";
let password = '123456';

console.log(email.toLowerCase());             // email il tharappaddathia lowercase kku change pannal
console.log(email.includes('@'));             // includes ida reason athil enna symbol ullatho athu irukkriatha enpathai check pannum. email il @ symbole ullatha entru check pannal. after true aagum

/////////////////////////////////////////////////// Email & passwod  ///////////////////////////////////////////////////

let Email = "MurSith&gmail.com";
let pwd = '123456';

if(Email.includes('@'))
{
    console.log('access granded');
}
else{
    console.log('invalid email');
}       
