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

+-----------------------------+
|      Supra (Object)         |
|     Instance of Car class   |
+-----------------------------+
| 🔸 Property Values          |
|   - Wheels: 4               |
|   - Engine: "Electric"      |
|   - Breaks: "Regenerative"  |
|                             |
| 🔹 Function Access          |
|   - Driving()               |
|   - ChangeDirection()       |
|   - IncreaseSpeed()         |
+-----------------------------+

+-----------------------------+
|      Ferrari (Object)       |
|     Instance of Car class   |
+-----------------------------+
| 🔸 Property Values          |
|   - Wheels: 4               |
|   - Engine: "Petrol"        |
|   - Breaks: "Disc"          |
|                             |
| 🔹 Function Access         |
|   - Driving()               |
|   - ChangeDirection()       |
|   - IncreaseSpeed()         |
+-----------------------------+
