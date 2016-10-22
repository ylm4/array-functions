<?php


echo "Array Slice \n";
$input = array("apple","banana","cherry","date");
$output = array_slice($input, -1); //returns "date"
$output = array_slice($input, -3, 1); //returns "cherry"
print_r(array_slice($input, 1, -1)); // returns "banana","cherry"
print_r(array_slice($input, 0, -1)); //returns "apple","banana","cherry"


echo "Array Splice \n";
$new_input = array_splice($input, 0,3); //$input is now ("apple","banana","cherry")
print_r($new_input);
?>
