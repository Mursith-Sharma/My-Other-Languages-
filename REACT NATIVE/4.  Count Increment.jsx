import { useState } from "react"                   // ithu dfault aaga react ilirunhu kidaikkum
import '../../App.css'

export default function StateExxam(){
    const[Count, SetMyCount] = useState(0);
    const handleClick = () => {
        SetMyCount(Count + 1);

    }
    return <>
    <h1>state example</h1>
    <h3>Count {Count}</h3>
    <button onClick={handleClick} className="bg-color">Incremet</button>
    </>
}

// usestate => State (Count) உருவாக்கும் மற்றும் update செய்யும் உதவிக்கருவி.
// Count → current state value (இங்கு ஆரம்ப மதிப்பு: 0) SetMyCount → state update செய்யும் function
// இந்த function Increment button-இல் click செய்தால் 실행 ஆகும். அது Count-ஐ ஒன்று கூடுமாறு செய்கிறது (Count + 1)

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

import StateExxam from "./core-concept/state/StateExample"

function App() {
  return <StateExxam/>
}
export default App
