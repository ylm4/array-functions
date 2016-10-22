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

echo "Array Shift \n";
$f = array('lentils','peas','green beans', 'chickpeas');
$beans= array_shift($f);
print_r($f);

echo "Array Unique \n";
$j = array("green","yellow","white","green","green","white");
$unique = array_unique($j);
print_r($j);
print_r($unique);

echo "Array Search \n";
$input_array= array (0 => 'apple', 1 => 'watermelon', 2 => 'orange', 3 => 'pineapple');
print_r($input_array);
echo "Search for key orange is in: \n";
$key= array_search('orange', $input_array);
print_r($key);

echo "Array Key Exists \n";
$search_array = array ('pet' => 'dog', 'car' => 'honda', 'fruit' => 'watermelon');
print_r($search_array);
if (array_key_exists('car', $search_array)){
	echo "The element 'car' is in the array \n";
}

echo "Array Reverse \n";
$innput = array ('python','php','java', array('white','purple'));
$reversed = array_reverse($innput);
print_r($innput);
print_r($reversed);

echo "Array Change Key Case \n";
$in= array("njit"=> 0, "nasa"=> 1);
print_r($in);
print_r(array_change_key_case($in, CASE_UPPER));

?>
