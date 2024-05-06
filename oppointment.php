<?php 
echo "gggggggggg";
	// Connect to database 
	$con=mysqli_connect("localhost","root","","photoshop"); 
    session_start();
	// Check if id is set or not if true toggle, 
	// else simply go back to the page 
	if (isset($_GET['pname'])){ 
        echo "gggggggggg";
        $username= $_SESSION['uname'];
        $ucell=  $_SESSION['ucell'] ;
        $uaddress= $_SESSION['uaddress'] ;
       
		// Store the value from get to a 
		// local variable "course_id" 
		$pname=$_GET['pname']; 
        $odate=date("Y-m-d H:i:s");
        
		// SQL query that sets the status 
		// to 1 to indicate activation. 
        $query    = "INSERT INTO `appointments` (`uname`, `pname`, `odate`, `ucell`, `uaddress`,`ustatus`,`pstatus`) VALUES ('$username', '$pname', '$odate', '$ucell', '$uaddress','pending','pending');";
      

		// Execute the query 
		mysqli_query($con,$query); 
	} 

	// Go back to course-page.php 
	header('location: userhome.php'); 
?>