<?php

echo "<h2>Validation using Regular Expressions</h2>";

// Sample inputs
$email = "test@gmail.com";
$phone = "9876543210";

/* EMAIL VALIDATION */
if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/", $email)) {
    echo "Valid Email<br>";
} else {
    echo "Invalid Email<br>";
}

/* PHONE VALIDATION */
if (preg_match("/^[0-9]{10}$/", $phone)) {
    echo "Valid Phone Number<br>";
} else {
    echo "Invalid Phone Number<br>";
}

?>