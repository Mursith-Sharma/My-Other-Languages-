//floor
//3.243409 = 3
//3.999409 = 3

//ceil
//3.243409 = 4
//3.999409 = 4

//rendom enpathu 0 to 1 varaiulla ethavathu number kattum (refresh evvery time)
let number = 3.99999
let nbr = 3.243409 

console.log(Math.floor(number))
console.log(Math.ceil(nbr))

console.log(Math.random())                  
console.log(Math.random() * 5)                                                 //0 to 5 varaiulla number print aagum       
console.log(Math.ceil(Math.random() * 10))                                      //0 print aahathu
console.log(Math.floor(Math.random() * 10))                                    // 10 print aagthu

console.log(Math.ceil((Math.random() * 6) +19))                        // print 20 to 25  
console.log(Math.floor((Math.random() * 6) +20))                        // print 20 to 25  

let low =20;
let upper =25;
console.log(Math.ceil(Math.random() * (upper - low) + 20))            // print 20 to 25  
