அம்சம்	தமிழில் விளக்கம்
1. Encapsulation	Data-ஐ ஒரு class-க்குள் மூடி பாதுகாப்பது
2. Abstraction	Details-ஐ மறைத்து, தேவையானது மட்டும் காட்டுவது
3. Inheritance	ஒரு class-ன் guni (மீண்டும் பயன்பாடு) மற்ற class-ல் பயன்படுத்துவது
4. Polymorphism	ஒரே பெயர், பல்வேறு செயல்கள் (example: method overloading/overriding)

சொல்லு	விளக்கம்
Class	ஒரு design (template) — Example: Car என்று வகை
Object	class-இல் இருந்து உருவான நிஜம் — Example: myCar, yourCar
Method	ஒரு object செய்யும் செயல்கள் — like .start(), .stop()
Property/Field	ஒரு object-ன் data — like color, speed

Car என்பது class → அது ஒரு design மாதிரி மாத்திரம்.
Supra மற்றும் Ferrari என்பது அந்த design-ஐ வைத்து உருவாக்கப்பட்ட உண்மையான வாகனங்கள் (objects).

Function-கள் (அதாவது Method-கள்) பொதுவாக இருக்கும்
ஆனால் Property-கள் (அதாவது value-கள்) வேறுபடலாம்

+-----------------------------+
|      Supra (Object)         |
| make object using class car |
+-----------------------------+
| 🔸 Property (Values)        |
|   - Wheels: 4               |
|   - Engine: "Electric"      |
|   - Breaks: "Regenerative"  |
|                             |
| 🔹 Method (Function)        |
|   - Driving()               |
|   - ChangeDirection()       |
|   - IncreaseSpeed()         |
+-----------------------------+

+-----------------------------+
|      Ferrari (Object)       |
| make object using class car |
+-----------------------------+
| 🔸 Property (Values)        |
|   - Wheels: 4               |
|   - Engine: "Petrol"        |
|   - Breaks: "Disc"          |
|                             |
| 🔹 Method (Function)        |
|   - Driving()               |
|   - ChangeDirection()       |
|   - IncreaseSpeed()         |
+-----------------------------+
🧠 இதை OOPS terms-ல சொன்னால்:

🔁 Functions (Methods) → Shared (Same for all objects)
எல்லா object-க்கும் ஒரே function-ஐ பயன்படுத்தலாம்.
அதாவது, function code ஒருமுறை class-ல் எழுதினாலே போதும்.

🔄 Properties (Variables/Values) → Different for each object
ஒவ்வொரு object-க்கும் தனிப்பட்ட values இருக்கலாம்.
அதாவது brand, model, engine, price எல்லாம் object-க்கு object-ஆக மாறலாம்.
