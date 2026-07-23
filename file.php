<?php

// File name
$filename = "orders.txt";

// 1. Create & Write to file
$file = fopen($filename, "w"); // "w" = write mode
fwrite($file, "First Order: Crochet Bag - ₹500\n");
fclose($file);

echo "<h3>File created and written successfully.</h3>";

// 2. Append data
$file = fopen($filename, "a"); // "a" = append mode
fwrite($file, "Second Order: Scarf - ₹300\n");
fclose($file);

echo "<h3>Data appended successfully.</h3>";

// 3. Read file
$file = fopen($filename, "r"); // "r" = read mode
$content = fread($file, filesize($filename));
fclose($file);

echo "<h3>File Content:</h3>";
echo nl2br($content);

?>