<?php
const FILENAME = "/Applications/AMPPS/www/php.local.com/crud/assets/js/script.js";
//echo pathinfo(FILENAME,PATHINFO_BASENAME);
//echo pathinfo(pathinfo(FILENAME,PATHINFO_DIRNAME),PATHINFO_BASENAME);
 echo pathinfo(FILENAME,PATHINFO_EXTENSION);
// echo pathinfo(FILENAME, PATHINFO_FILENAME);