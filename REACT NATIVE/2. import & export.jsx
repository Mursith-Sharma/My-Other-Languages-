// how to import & export functional components

jsxExample.jsx file===> 
/////////////////////////////////////////////////////////////
  
export default function JSXexample (){                      // function JSXexample enum component iani make panni arthai export pannanum appothuthan App.jsx il import panni output edukalam
    return <h1>hello bhai</h1>
}

/////////////////////////////////////////////////////////////
App.jsx file===>
/////////////////////////////////////////////////////////////
  
import JSXexample from "./core-concept/JSX/JSXexample"       //இங்க, ./core-concept/JSX/JSXexample என்ற கோப்பிலிருந்து JSXexample என்ற React component-ஐ import பண்ணுறோம். அந்த JSXexample component அந்த கோப்பில் default ஆக export பண்ணப்பட்டிருக்கணும்.
                                                             // ivvaruthan css and other files import pannavendum
function App() {
  return <JSXexample/>
}

export default App
////////////////////////////////////////////////////////////
// நீங்கள் ஒரு App என்ற React component default aah irukkum ithuthan main. இந்த App component, call செய்யும்போது HelloWorld என்ற component-ஐ காட்டும். pin HellowWorld ilulla content print aahum
// React-ல் JSX-ஐ வாசிக்கும் பொழுது, lowercase tag names (like <man />) HTML elements-ஆ என்று நினைக்கும். so always make name Start with Uppercase
