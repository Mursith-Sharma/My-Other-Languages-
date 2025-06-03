<!doctype html>
<html lang="en">
    <head>
      <style>
        .error 
        {
          color: #FF0000; 
        }
      </style>
        <title>FORM TASK</title>

        <!-- Bootstrap CSS v5.2.1 -->
         
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>



    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
        

    <!-- body start -->

    <p>
<!-- 
● Full Name
● Email Address
● Contact Number
● Date of Birth
● Position Applied For (Dropdown: Software Developer/Web Designer/Project Manager)
● Resume Upload (File Input)
● Cover Letter (Textarea)
● LinkedIn Profile (URL Input)
● Work Experience (Number of Years)
● Skills (Checkboxes for different skills: HTML/CSS/ JavaScript/PHP/Java) -->

    </p>

<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->



<?php 

$name = $email = $contact = $dob = $position = $resume = $cover = $link = $work = $skills = "";
$nameerr = $emailerr = $contacterr = $doberr = $positionerr = $resumeerr = $covererr = $linkerr = $workerr = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(empty($_POST["name"]))
  {
    $nameerr = "*Name is required";
  }
  else
  {
    $name = text_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
    {
      $nameerr = "Only letters and white space allowd";
    }
  }

  if(empty ($_POST["email"]))
  {
    $emailerr = "Email is required";
  }
  else
  {
    $email = text_input($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $emailerr = "Invalid email format";
    }
  }

  if(empty ($_POST["contact"]))
  {
    $contacterr = "contact number is required";
  }
  else
  {
    $contact = text_input($_POST["contact"]);
    if(!preg_match("/^(\+?\d{1,4}[\s-]?)?\d{10}$/", $contact))
    {
      $contacterr = "Invalid contact number";
    }
  }

  if(empty ($_POST["dob"]))
  {
    $doberr = "enter date of birth";
  }
   else
  {
       $dob = text_input($_POST["dob"]);
  }


  if(empty ($_POST["position"]))
  {
    $positionerr = "Enter Your Position";
  }
   else
  {
       $position = text_input($_POST["position"]);
  }

  if(empty ($_POST["resume"]))
  {
    $resumeerr = "Upload Your resume";
  }
   else
  {
       $resume = text_input($_POST["resume"]);
  }

  if(empty ($_POST["cover"]))
  {
    $covererr = "Tell about Yourself";
  }
   else
  {
       $cover = text_input($_POST["cover"]);
  }

  if(empty ($_POST["link"]))
  {
    $linkerr = "Enter Your linkdin url";
  }
   else
  {
    $link = sanitize_url($_POST["link"]);
    if(!preg_match("/^https?:\/\/(www\.)?linkedin\.com\/in\/[a-zA-Z0-9_-]+\/?$/",$link))
    {
      $linkerr = "Enter valid linkdin url";
    }   
  }

    if(empty ($_POST["work"]))
  {
    $workerr = "enter your experience";
  }
   else
  {
       $work = $_POST["work"];
  }


if (!empty($_POST["skills"])) 
{
    $skills = $_POST["skills"];
    $skill = implode(", ", $skills); // Converts array to string
} else 
{
    $skill = "No skills selected.";
}



}

function sanitize_url($data)                   // intha function edukka kaaranam text_input function il seithal athu stripslashes, htmlspecialchars enpavatrai remove pannum 
{                                              // athanal ithau use pannuhirom matrum preg_match il linkdin url mattum allow pannuvathal veru script vara vaaippillai
  return trim($data); // Only trim spaces — don’t modify slashes or characters
}

function text_input($data)
{
  $data =trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>



<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->

    <h1>Jop Application Form</h1>


                                                                                                                
  <form method="post" class="container mt-4" enctype="multipart/form-data" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">

<div class="mb-3">                                   
  <label for="fullname" class="form-label">Full Name</label>                                           <!-- ingu action enpathu form il idum details inai engu anuppavendum enpathai kurikkum -->
  <input type="text" class="form-control" id="fullname" name="name">                                    <!-- method post enpathu detail url il theriyamal anuppum method than post method aagum-->
  <span class="error"><?php echo $nameerr;?> </span>
</div>

<div class="mb-3">
  <label for="email" class="form-label">Email Address</label>
  <input type="email" class="form-control" id="email" name="email">
  <span class="error"> * <?php echo $emailerr;?></span>
</div>

<div class="mb-3">
  <label for="contact" class="form-label">Contact Number</label>
  <input type="text" class="form-control" id="contact" name="contact">
  <span class="error"> * <?php echo $contacterr;?></span>
</div>

<div class="mb-3">
  <label for="dob" class="form-label">Date of Birth</label>
  <input type="date" class="form-control" id="dob" name="dob">
  <span class="error"><?php echo $doberr;?></span>
</div>

<div class="mb-3">
  <label for="position" class="form-label">Position Applied For</label>
  <select class="form-select" id="position" name="position">
    <option value="">Select</option>
    <option value="Software Developer">Software Developer</option>
    <option value="Web Designer">Web Designer</option>
    <option value="Project Manager">Project Manager</option>
  </select>
  <span class="error"><?php echo $positionerr;?></span>
</div>

<div class="mb-3">
  <label for="resume" class="form-label">Upload Resume (PDF Only)</label>
  <input type="file" class="form-control" id="resume" name="resume" accept=".pdf">
  <span class="error"><?php echo $resumeerr;?></span>
</div>

<div class="mb-3">
  <label for="cover" class="form-label">Cover Letter</label>
  <textarea class="form-control" id="cover" name="cover" rows="4"></textarea>
  <span class="error"><?php echo $covererr;?></span>
</div>

<div class="mb-3">
  <label for="linkedin" class="form-label">LinkedIn Profile</label>
  <input type="url" class="form-control" id="linkedin" name="link">
  <span class="error"><?php echo $linkerr;?></span>
</div>

<div class="mb-3">
  <label for="experience" class="form-label">Work Experience (Years)</label>
  <input type="number" class="form-control" id="experience" name="work" min="0">
  <span class="error"><?php echo $workerr;?></span>
</div>

<div class="mb-3">
  <label class="form-label">Skills</label><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="skills[]" value="HTML">
    <label class="form-check-label">HTML</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="skills[]" value="CSS">
    <label class="form-check-label">CSS</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="skills[]" value="JavaScript">
    <label class="form-check-label">JavaScript</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="skills[]" value="PHP">
    <label class="form-check-label">PHP</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="skills[]" value="Java">
    <label class="form-check-label">Java</label>
  </div>
</div>

<button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto bttt">Submit</button>

<br><br><br>

<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->


<?php
echo "<h2>Your Input Is:</h2>";
echo "Welcome : ". $name;
echo "<br>";
echo "Your Email Is : ". $email;
echo "<br>";
echo "Your contact number Is : ". $contact;
echo "<br>";
echo "Your DOB Is : ". $dob;
echo "<br>";
echo "Your Position Is : ". $position;
echo "<br>";
echo "About Myself : ". $cover;
echo "<br>";
echo "Linkdin Page : ". $link;
echo "<br>";
echo "Experience years: ". $work;
echo "<br>";
echo "Your Skills: ". $skill;
echo "<br><br><br> <br>";

?>

<br><br><br><br>

<!-- 
1.security concept htmlchar
2. make functin for this . athavathu backshalsh, trim, htmlchar ivatrukkaha oru function seithu athilirunthu vadikatti eduththal 
-->




    </body>
</html>
