import '../../App.css'
export default function Simpleform(){
    const handlesubmit = (event) => {
        event.preventDefault();                                         // after submit refresh aavathai thadukka
        console.log(event.target.name.value)
        console.log(event.target.email.value)
    }
    return <>
    <h1>Simple form</h1>
    <form onSubmit={handlesubmit}>
            <input type="text" name='name' placeholder='Enter name' />
            <input type="text" name='email' placeholder='Enter email' /><br/><br/>
            <button type='submit' className='bg-color'>Submit</button>
    </form>
    </>
}

// 🔸 console.log(event.target.name.value) ➡️ User name field-ல் type செய்த data-வை console-இல் காட்டும்.
// 🔸 <form onSubmit={handlesubmit}> ➡️ Form submit ஆகும் போது handlesubmit functionஐ trigger செய்கிறது.
// event.target = அந்த form
//  event என்பது form submission event
// ➡️ event.target என்பது அந்த form-ஐயே refer பண்ணும்
// event.target.name = form-இல் உள்ள name input
// event.target.name.value = user type செய்த data
///////////////////////////////////////////////////////////////////////////////////////////////////////////

import Simpleform from "./core-concept/Eventhandle/SimpleForm"

function App() {
  return <Simpleform/>
}
export default App
