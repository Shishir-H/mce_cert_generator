<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'student_info');
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>