//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//JSXexample.jsx ==>
import "../../App.css"                                       // veroru file kkana css design inai ithatku import panniullom
export default function JSXexample (){
    const name = 'Mursith';

    return <div>
        <h1 className="bg-color">hello {name}</h1>
        <p style={{backgroundColor: 'red', border: '3px solid black'}}>this is sample text</p>
    </div>

}

////////////////////////////////////////////////////////////
//App.jsx ==>
import JSXexample from "./core-concept/JSX/JSXexample"

function App() {
  return <JSXexample/>
}
export default App

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Props = "Properties" என்பதின் சுருக்கம்.
// React-ல் ஒரு parent component → child component-க்கு data அனுப்புவது தான் props.
//App.jsx ==>
import PropsExample from "./core-concept/Props-04/Props"

function App() {
  return <PropsExample title="Welcome to react course"/>
}
export default App

////////////////////////////////////////////////////////////  title il ullathai print panna naam props use panrom
//Props.jsx ==>
export default function PropsExample(Props){
    return <>
    <h1>Props Example component</h1>
    <p>{Props.title}</p>
    </>
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

import "../../App.css"

export default function PropsExample({title, technology}){
    return <>
    <h1>Props Example component</h1>
    <p>{title}</p>
    <p>this tech stack is based on {technology}</p>
    </>
}

////////////////////////////////////////////////////////////

import PropsExample from "./core-concept/Props-04/Props"

function App() {
  return <PropsExample technology="javascript" title="Welcome to react course"/>
}
export default App

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
