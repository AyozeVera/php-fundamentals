<?php

list($month, $day, $year) = sscanf("June 7th, 2012", "%s %[^,], %d");
//return an array
echo $month;
echo $day;
echo $year;
