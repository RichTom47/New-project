

<?php  
// connect to database
$conn= mysqli_connect('localhost:3308', 'tomtom', 'datusco', 'tomtom_pizza');
// check connection
if (!$conn) {
	echo 'connection error: ' . mysqli_connect_error();
} ?>