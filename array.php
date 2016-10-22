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

echo "Array Combine \n";
$f = array('Calamari', 'Penne Vodka', 'Chocolate Lava Cake');
$t = array('Appetizer', 'Entree', 'Desert');
$l = array_combine($t,$f);
print_r($l);

echo "Array Fill Keys \n";
$b = array_fill(1,4,'four');
$s = array_fill(5,4,'eight');
print_r($b);
print_r($s);

echo "Array Flip \n";
$in= array('zero','one', 'two','three');
$flipped = array_flip($in);
print_r($in);
print_r($flipped);

echo "Array Count \n";
$pies[1] = 'pumpkin pie';
$pies[2] = 'banana pie';
$pies[3] = 'apple pie';
$count = count($pies);
print_r ($count);

echo "\nArray Count Values \n";
$array = array('one', 1, 'one','won','won','won');
print_r($array);
print_r(array_count_values($array));
?>
