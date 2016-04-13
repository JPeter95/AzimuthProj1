<?php

/*Pre-Load Section - NO HTML Output******************************************/
session_start();

//Pre-Load Variable Definition
$ROOT = './';

/*Load Section - HTML Output OK**********************************************/

//Output HTML Azimuth Header
include('header.php');

//Output HTML Azimuth Home Article
include('html/home.html');

//Output HTML Azimuth Footer
include('footer.php');

?>