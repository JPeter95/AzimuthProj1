<?php

/*Pre-Load Section - NO HTML Output******************************************/

//Pre-Load Variable Definition
$ROOT = './';

session_start();


/*Load Section - HTML Output OK**********************************************/

//Output HTML Azimuth Header
include('header.php');

//Output HTML Azimuth Article
include('html/about.html');

//Output HTML Azimuth Footer
include('footer.php');

?>