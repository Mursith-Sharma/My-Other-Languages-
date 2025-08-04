import { useState } from "react";
import '../../App.css'

export default function ListExam(){
    const items = ['apple', 'banana', 'cherry'];

    return <>
    <h1>List Example</h1>                     
    <ul>
        {items.map((item, index) => <li key={index}> {item}</li>)}                
    </ul>                                                          
    </>
} 
// JavaScript-இல் .map() என்பது: ஒரு array-இல் உள்ள ஒவ்வொரு item-ஐ எடுத்துக்கொண்டு, புதிய ஒரு array-ஐ உருவாக்கும்.                     
// | பகுதி                         | விளக்கம்                                                                                           |
// | ----------------------------- | -------------------------------------------------------------------------------------------------- |
// | `items.map(...)`              | array-இல் உள்ள ஒவ்வொரு item-க்கும் function ஓட்டுகிறது                                             |
// | `(item, index)`               | `item` என்பது array-இல் உள்ள மதிப்பு (`apple`, etc.), `index` என்பது அதன் இடம் (0, 1, 2...)        |
// | `<li key={index}>{item}</li>` | ஒவ்வொரு item-ஐ `<li>` tag-ஆக return செய்கிறது, `key` அவசியம் React-க்காக (விரைவாக UI update செய்ய) |

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

import ListExam from "./core-concept/Eventhandle/ListExample"

function App() {
  return <ListExam/>
}
export default App
