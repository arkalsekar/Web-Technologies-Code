<?php
// Access Session Variables
session_start();

echo "User ID is " . $_SESSION['user_id'] . "<br>";
echo "Username is " . $_SESSION['username'] . "<br>";
echo "Full Name is " . $_SESSION['full_name'] . "<br>";
    
?>