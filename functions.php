<?php

echo "<h2>PHP Functions Demo - Thread & Hooks</h2>";

/* 1. ARRAY FUNCTIONS */
echo "<h3>Array Functions</h3>";

$products = array("Bag", "Scarf", "Cap");

// Count elements
echo "Total Products: " . count($products) . "<br>";

// Sort array
sort($products);
echo "Sorted Products: ";
print_r($products);


/* 2. STRING FUNCTIONS */
echo "<h3>String Functions</h3>";

$text = "crochet products";

// String length
echo "Length: " . strlen($text) . "<br>";

// Uppercase
echo "Uppercase: " . strtoupper($text) . "<br>";

// Replace word
echo "Replace: " . str_replace("crochet", "handmade", $text) . "<br>";


/* 3. MATH FUNCTIONS */
echo "<h3>Math Functions</h3>";

echo "Square Root of 16: " . sqrt(16) . "<br>";
echo "Random Number: " . rand(1,100) . "<br>";
echo "Power (2^3): " . pow(2,3) . "<br>";


/* 4. DATE FUNCTIONS */
echo "<h3>Date Functions</h3>";

echo "Today's Date: " . date("Y-m-d") . "<br>";
echo "Current Time: " . date("H:i:s") . "<br>";

?>