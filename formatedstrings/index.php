<?php

$results = sscanf("June 7th, 2012", "%s %[^,], %d");
//return an array 
print_r($results);
