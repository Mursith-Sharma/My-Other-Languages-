let hero = ['ironman', 'thor', 404,'spiderman', 'loki'];

console.log(hero[2]);                             // array ilulla virumpiya value inai output panna
console.log(hero[0]);

console.log(hero.length);                                       //eththanai value ullathu ena find panna
console.log('we Have ' + hero.length + ' super heros');
console.log(`we have ${hero.length} super heros`);              // ivvarum use pannalam (``)

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

let hero = [];

hero.push('iron man');                                            //push aanathu melull emty breket kkul assign ahividum so oru value irukkum

console.log('we Have ' + hero.length + ' super heros');
console.log(`we have ${hero.length} super heros`);               // ivvarum use pannalam (``)

///////////////////////////////////////////////////////////////////

let actor = [];

hero.unshift('iron man');                                        //unshift aanathu same lik push

console.log('we Have ' + actor.length + ' super heros');
console.log(`we have ${actor.length} super heros`);              // ivvarum use pannalam (``)

////////////////////////////// diffrent between push vs unshift ///////////////////

let villain = ['hulk', 'loki', 'spider man'];

villain.unshift('iron man');                                      //unshift aanathu array il 1st il serkkum
console.log( villain );  

////////////////////////////// push vs unshift ///////////////////

let man = ['hulk', 'loki', 'spider man'];

man.push('iron man');                                            //push aanathu array il last il serkkum
console.log( man );
