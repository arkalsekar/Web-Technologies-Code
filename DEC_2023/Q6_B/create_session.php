<?php   
// Create Session Variables
session_start();
$_SESSION['user_id'] = 101;
$_SESSION['username'] = 'arkalsekar';
$_SESSION['full_name'] = 'Arun Kalsekar';

echo "Session variables are set.";
echo "Username is " . $_SESSION['username'];

?>