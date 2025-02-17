<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    
</head>
<body>
<h2>PHP Basic Tasks</h2>

<p>Question 1</p>

<?php
$colors = ['red', 'green', 'white'];

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the " .
    $colors[0] . " carpet, the " . $colors[1] . " lawn, the " . $colors[2] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo $paragraph;
?>
<br>
<hr>
<p>Question 2</p>
<?php
$colors = array('white', 'green', 'red');

echo "<ul>";
foreach (array_slice($colors, 1) as $color) {
    echo "<li>$color</li>";
}
echo "<li>{$colors[0]}</li>";
echo "</ul>";
?>
<br>
<hr>
<p>Question 3</p>
<?php

$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital.<br>";
}

?>
<br>
<hr>
<p>Question 4</p>

<?php
$color = array(4 => 'white', 6 => 'green', 11 => 'red');

echo reset($color); 
?>

<br>
<hr>
<p>Question 5</p>
<?php
function insertItemIntoArray($array, $position, $newItem) {
    $position = max(0, min(count($array), $position));
    
    array_splice($array, $position, 0, $newItem);
    
    return $array;
}

$array = [1, 2, 3, 4, 5];
$position = 3; 
$newItem = '$';

$result = insertItemIntoArray($array, $position, $newItem);

echo implode(" ", $result);
?>


<br>
<hr>
<p>Question 6</p>
<?php

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

ksort($fruits);

foreach ($fruits as $key => $value) {
    echo "$key = $value\n";
}

?>


<br>
<hr>
<p>Question 7</p>

<?php
$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
    65, 64, 68, 73, 75, 79, 73];

$averageTemp = array_sum($temperatures) / count($temperatures);

sort($temperatures);

$lowestTemps = array_slice($temperatures, 0, 5);

$highestTemps = array_slice($temperatures, -5);

echo "Average Temperature is: " . number_format($averageTemp, 1) . "\n";
echo "List of five lowest temperatures: " . implode(", ", $lowestTemps) . "\n";
echo "List of five highest temperatures: " . implode(", ", $highestTemps) . "\n";
?>

<br>
<hr>
<p>Question 8</p>

<?php
if (!function_exists('convertToLowercase')) {
    function convertToLowercase($array) {
        return array_map('strtolower', $array);
    }
}

if (!function_exists('convertToUppercase')) {
    function convertToUppercase($array) {
        return array_map('strtoupper', $array);
    }
}

if (!function_exists('mergeArrays')) {
    function mergeArrays($array1, $array2) {
        return array_merge($array1, $array2);
    }
}

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$mergedArray = mergeArrays($array1, $array2);

print_r($mergedArray);
?>



<br>
<hr>
<p>Question 9</p>

<?php
if (!function_exists('convertToLowercase')) {
    function convertToLowercase($array) {
        return array_map('strtolower', $array);
    }
}

if (!function_exists('convertToUppercase')) {
    function convertToUppercase($array) {
        return array_map('strtoupper', $array);
    }
}

$colors = array("red", "blue", "white", "yellow");
$uppercaseColors = convertToUppercase($colors);

// Output the result
print_r($uppercaseColors);
?>


<br>
<hr>
<p>Question 10</p>

<?php
function convertToLowercase($array) {
    return array_map('strtolower', $array);
}

$colors = array("RED", "BLUE", "WHITE", "YELLOW");
$lowercaseColors = convertToLowercase($colors);

print_r($lowercaseColors);
?>



<br>
<hr>
<p>Question 11</p>
<?php
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$lengths = array_map('strlen', $words);

$shortest = min($lengths);
$longest = max($lengths);

echo "The shortest array length is $shortest. The longest array length is $longest.";
?>

<br>
<hr>
<p>Question 12</p>

<?php
$array1 = array(2, 0, 10, 12, 6);

$filteredArray = array_filter($array1, function($value) {
    return $value !== 0;
});

$lowest = min($filteredArray);

echo "The lowest non-zero integer is $lowest.";
?>


































































































</body>
</html>
