import { useState } from "react";
import '../../App.css'

export default function EventHandling() {
    const [masage, setmassege] = useState("");

    const handlechange = (evnt) => {
        setmassege(evnt.target.value)
    }

    return<>
    <h1>Welcome our exam</h1>
    <input type="text" onChange={handlechange} placeholder="Enter masage" />
    <p>{masage}</p>
    </>
}

/////////////////////////////////////////////////////////////////////////////////////////

import EventHandling from "./core-concept/Eventhandle/EventHandling"

function App() {
  return <EventHandling/>
}
export default App
