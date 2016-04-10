<?php

/*Pre-Load Section - NO HTML Output******************************************/


/*Load Section - HTML Output OK**********************************************/

//Output HTML Azimuth Header
include_once('header.php');

//Output HTML Azimuth Article
include_once('get-started.html');

echo("<h2>Student Information</h2>");
echo("<p>Please enter your information below:<br /></p>");
?>

<form action="submitData.php" method="post">
    <fieldset>
      <legend><strong>UMBC Student Information</strong></legend>
      <label for="name">Name</label><br />
      <input type="text" name="name" value="" 
  maxlength="70" required>
      <div class="error"></div><br />
      <label for="stuid">Campus ID</label><br />
      <input type="text" name="stuid" value="" 
  maxlength="7" size="10" required>
      <div class="error"></div><br />
      <label for="email">UMBC Email</label><br />
      <input type="email" name="email" value="" 
  maxlegnth="40" required>
      <div class="error"></div><br />
      <label for="degree">Degree</label><br />
      <select name="degree" required>
        <option value="" disabled selected value></option>
        <option value="cmsc">Computer Science</option>
      </select><div class="error"></div><br />
    </fieldset>

<?php
$servername = "studentdb-maria.gl.umbc.edu";
$username = "joneill2";
$password = "";

$link = mysql_connect($servername, $username, $password);
if (!$link) {
  die("Could not connect: " . mysql_error());
}
//echo "Connected successfully";

$db_selected = mysql_select_db('joneill2', $link);
if (!$db_selected) {
  die ('Can\'t use joneill2 : ' . mysql_error());
}

$result = mysql_query("SELECT COUNT(*) FROM Courses");
if(!$result){
  die('Could not query: ' . mysql_error());
}
$count = mysql_result($result,0);
//echo($count);

$result = mysql_query("SELECT Course FROM Courses");
if(!$result){
  die('Could not query: ' . mysql_error());
}

echo("Please select all courses you have taken in the past as well as all courses you are currently taking<br>");
//echo("<form action=\"submitData.php\">");
for($i=0; $i<$count; $i++){
  $currentCourse = mysql_result($result,$i);
  echo("<input type=\"checkbox\" name=\"course\" value=\"$i\"> $currentCourse <br>");
}
echo("<input type=\"submit\" value=\"Submit\">");
echo("</form>");
//$question = mysql_result($result,$i);


mysql_close($link);


//Output HTML Azimuth Footer
include_once('footer.php');

?>
