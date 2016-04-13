<?php

/*Pre-Load Section - NO HTML Output******************************************/

//Pre-Load Variable Definition
$ROOT = '../';

session_start();
session_register("courses_valid");

$_SESSION["courses_valid"] = TRUE;


$servername = "studentdb-maria.gl.umbc.edu";
$username = "joneill2";
$password = "catdogdonutman27";

/*Load Section - HTML Output OK**********************************************/

//Output HTML Azimuth Header
include_once('../header.php');

//Output HTML Azimuth Article
include_once('html/results.html');

$link = mysql_connect($servername, $username, $password);
if (!$link) {
  die("Could not connect: " . mysql_error());
}

$db_selected = mysql_select_db('joneill2', $link);
if (!$db_selected) {
  die ('Can\'t use joneill2 : ' . mysql_error());
}

$result = mysql_query("SELECT COUNT(*) FROM Courses");
if(!$result){
  die('Could not query: ' . mysql_error());
}
$count = mysql_result($result,0);


$result = mysql_query("SELECT Course FROM Courses");
if(!$result){
  die('Could not query: ' . mysql_error());
}


$result = mysql_query("INSERT INTO StudentInfo (StudentName, UMBCID, Email) VALUES ('".$_SESSION['name']."', '".$_SESSION['stuid']."', '".$_SESSION['email']."')");

if(!$result){
  die('Could not query: ' . mysql_error());
}

$result = mysql_query("INSERT INTO Suggestions (StudentName, UMBCID, Email) VALUES ('".$_SESSION['name']."', '".$_SESSION['stuid']."', '".$_SESSION['email']."')");

if(!$result){
  die('Could not query: ' . mysql_error());
}

$studentId = $_POST["stuid"];
for($i=0; $i<$count; $i++){
  $courseNumber = $i+1;
  if(strcmp($_POST["$courseNumber"], "1") == 0){
    $result = mysql_query("UPDATE StudentInfo SET `$courseNumber`='1' WHERE UMBCID='$studentId'");
    if(!$result){
      die('Could not query: ' . mysql_error());
    }
  }
}

$prereqStr = mysql_query("SELECT Prerequisites FROM Courses");
if(!$prereqStr){
  die('Could not query: ' . mysql_error());
}

for($i=0; $i<$count; $i++){
  $currentCourse= $i + 1;
  $canTakeCourse = True;
  $canTake447 = False;
  if(strcmp($_POST["$currentCourse"], "1") == "0"){
    $canTakeCourse = False;
  }
  else{
    $numPrereqs = mysql_result($prereqStr, $i);
    if(strcmp($numPrereqs, "0") == "0"){
      if($currentCourse == 29){
	for($index=13; $index<57; $index++){
	  if(strcmp($_POST["$index"], "1") == "0"){
	    $canTake447 = True;
	  }
	}
      }
    }
    else{
      for($j=0; $j<$numPrereqs; $j++){
	$jNum = $j + 1;
	$prereqNeeded = mysql_query("SELECT prereq$jNum FROM Courses WHERE ID='$currentCourse'");
	if(!$prereqNeeded){
	  die('Could not query: ' . mysql_error());
	}
	$courseNeeded = mysql_result($prereqNeeded, 0);
	$takenCourse = mysql_query("SELECT `$courseNeeded` FROM StudentInfo WHERE UMBCID='$studentId'");
	if(!$takenCourse){
	  die('Could not query: ' . mysql_error());
	}
	$hasTakenCourse = mysql_result($takenCourse,0);
	if($hasTakenCourse == 1){

	}
	else{
	  $canTakeCourse = False;
	}
      }

      

    }
  }

  if($currentCourse == 29 && $canTake447==True){
    $updateStr = mysql_query("UPDATE Suggestions SET `$currentCourse`='1' WHERE UMBCID='$studentId'");
    if(!$updateStr){
      die('Could not query: ' . mysql_error());
    }
  }
  
  else{
    if($currentCourse == 29){

    }
    else{
      if($canTakeCourse == True){
        $updateStr = mysql_query("UPDATE Suggestions SET `$currentCourse`='1' WHERE UMBCID='$studentId'");
        if(!$updateStr){
          die('Could not query: ' . mysql_error());
        }
      }
    }
  }
}

//Student Input Confirmation Output



//Results Output
$result = mysql_query("SELECT COUNT(*) FROM Courses");
if(!$result){
  die('Could not query: ' . mysql_error());
}
$count = mysql_result($result,0);

$courseTotal = mysql_query("SELECT Course FROM Courses");
if(!$courseTotal){
  die('Could not query: ' . mysql_error());
}

echo("<fieldset><legend><strong>Computer Science Courses</strong></legend><table>");

$allCourses = mysql_query("SELECT Course FROM Courses");
if(!$allCourses){
  die('Could not query: ' . mysql_error());
}
for($i=0; $i<$count; $i++){
  $coursePlusOne = $i+1;
  $thisCourse = mysql_query("SELECT `$coursePlusOne` FROM Suggestions WHERE UMBCID='$studentId'");
  if(!$thisCourse){
    die('Could not query: ' . mysql_error());
  }

  if($coursePlusOne == 57){
    echo("<fieldset><legend><strong>Science Elective Courses</strong></legend><table>");
  }

  else if($coursePlusOne == 69){
    echo("<fieldset><legend><strong>Math Courses</strong></legend><table>");
  }


  $hasTaken = mysql_result($thisCourse, 0);
  if(strcmp($hasTaken, "1") == "0"){
    $courseOutput = mysql_result($allCourses, $i);
    echo("<tr><td></td><td>$courseOutput</td></tr>");
  }
  if($coursePlusOne == 56 || $coursePlusOne == 68 || $coursePlusOne == 72){
    echo("</table></fieldset>");
  }
}


?>

  <p>
    Not your results? Want to resubmit? Click "Resubmit" to start over.
  </p>

</div>

<?php
mysql_close($link);


//Output HTML Azimuth Footer
include_once('../footer.php');

?>