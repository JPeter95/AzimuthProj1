<?php

/*Pre-Load Section - NO HTML Output******************************************/

//Pre-Load Variable Definition
$ROOT = '../';

session_start();
session_register("student_valid");

$_SESSION["student_valid"] = FALSE;

/*Page Script Section - NO HTML Output***************************************/

//Script Variable Definition
$name = $stuid = $email = $degree = "";
$nameErr = $stuidErr = $emailErr = $degreeErr = "";
$checksum = 0;

settype($checksum, "integer");

//clean_input - Sanitizes string inputs for potential code injection
function clean_input($data) {
  $data = strip_tags($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//Check for Redirect
if($_SESSION["student_valid"] == TRUE) {
  if(isset($_SESSION["courses_valid"]) &&
     $_SESSION["courses_valid"] == TRUE){
    header('Location: forms/results.php');
  }
  else {
    header('Location: forms/courses.php');
  }
}

//Student Information Form Validation
if($_SERVER["REQUEST_METHOD"] == "POST") {

  //Validate Name
  if(empty($_POST["name"])) {
    $nameErr = "Name is Required";
  }
  else {
    $name = rtrim(clean_input($_POST["name"]));
    //Check Letters and non-trailing Whitespace Only
    if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Letters and spaces only";
    }
    else {
      $checksum++;
    }
  }
  //Validate Campus ID
  if(empty($_POST["stuid"])) {
    $stuidErr = "Campus ID is Required";
  }
  else {
    $stuid = trim(clean_input($_POST["stuid"]));
    //Check UMBC ID Pattern Match
    if(!preg_match("/^[a-zA-Z]{2}[0-9]{5}$/",$stuid)) {
      $stuidErr = "Invalid Campus ID format";
    }
    else {
      $checksum++;
    }
  }
  //Validate UMBC Email
  if(empty($_POST["email"])) {
    $emailErr = "UMBC Email is Required";
  }
  else {
    $email = trim(clean_input($_POST["email"]));
    //Check UMBC Email Pattern Match
    if(!preg_match("/^[a-z0-9]{3,}+@umbc.edu$/",$email)) {
      $emailErr = "Invalid UMBC Email format";
    }
    else {
      $checksum++;
    }
  }
  //Validate Degree
  if(($_POST["degree"]) == "") {
    $degreeErr = "Degree is Required";
  }
  else {
    $degree = $_POST["degree"];
    $checksum++;
  }
  
  //Check All Fields Valid
  if($checksum == 4) {
    
    //Register and Set Session Variables
    session_register("name");
    session_register("stuid");
    session_register("email");
    session_register("degree");
    
    $_SESSION["name"] = $name;
    $_SESSION["stuid"] = $stuid;
    $_SESSION["email"] = $email;
    $_SESSION["degree"] = $degree;
    $_SESSION["student_valid"] = TRUE;
    
    //Redirect to Next Form
    header('Location: courses.php');
  }
}

/*Output Section - HTML Output OK*********************************************/

//Output HTML Azimuth Header
include('../header.php');

//Output HTML Azimuth Article
include('html/student.html');

//Output HTML Student Info Form
?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" 
  method="post">
    <fieldset>
      <legend><strong>UMBC Student Information</strong></legend>
      <label for="name">Name</label><br />
      <input type="text" name="name" value="<?php echo $name;?>" 
  maxlength="70" required>
      <div class="error"><?php echo $nameErr;?></div><br />
      <label for="stuid">Campus ID</label><br />
      <input type="text" name="stuid" value="<?php echo $stuid;?>" 
  maxlength="7" size="10" required>
      <div class="error"><?php echo $stuidErr;?></div><br />
      <label for="email">UMBC Email</label><br />
      <input type="email" name="email" value="<?php echo $email;?>" 
  maxlegnth="40" required>
      <div class="error"><?php echo $emailErr;?></div><br />
      <label for="degree">Degree</label><br />
      <select name="degree" required>
        <option value="" disabled selected value></option>
        <option value="cmsc">Computer Science</option>
      </select><div class="error"><?php echo $degreeErr;?></div><br />
      <input type="submit" value="Submit">
    </fieldset>
  </form>
</div>

<?php

//Output HTML Azimuth Footer
include('../footer.php');

?>