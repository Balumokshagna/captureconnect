<?php 

	// Connect to database 
	$con=mysqli_connect("localhost","root","","photoshop"); 

	// Check if id is set or not if true toggle, 
	// else simply go back to the page 
	if (isset($_GET['name'])){ 

		// Store the value from get to a 
		// local variable "course_id" 
		$uname=$_GET['name']; 

		// SQL query that sets the status 
		// to 1 to indicate activation. 
		$sql="UPDATE ureg SET status='Accept' WHERE uname='$uname'"; 

		// Execute the query 
		mysqli_query($con,$sql); 
	} 

	// Go back to course-page.php 
	header('location: adminhome.php'); 
?>