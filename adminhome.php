<!DOCTYPE html>
<html>

<head>
<!-- Basic -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- Mobile Metas -->
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!-- Site Metas -->
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />
<link rel="shortcut icon" href="images/favicon.png" type="">

<title>photographers</title>

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" href="style1.css"/>

<!-- fonts style -->
<link
	href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
	rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css"
	href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href="css/font-awesome.min.css" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

	<div class="hero_area">

		<div class="hero_bg_box">
			<div class="bg_img_box">
				<img src="images/hero-bg.png" alt="">
			</div>
		</div>

		<!-- header section strats -->
		<header class="header_section">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg custom_nav-container ">
					<a class="navbar-brand" href="index.html"> <span>
					<img src="images/logo.png" width="100">
						</span>
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class=""> </span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav  ">
							
						
						<li class="nav-item"><a class="nav-link"
								href="AViewAppointment.php">View Appointment<span class="sr-only">(current)</span>
							</a></li>
                            <li class="nav-item active"><a class="nav-link"
								href="adminhome.php">Users <span class="sr-only">(current)</span>
							</a></li>
							<li class="nav-item"><a class="nav-link" href="aplist.php">
									<i class="fa fa-user" aria-hidden="true"></i> Photographers
							</a></li>
							<li class="nav-item"><a class="nav-link" href="index.html">
									<i class="fa fa-user" aria-hidden="true"></i> Logout
							</a></li>
							
							</form>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!-- end header section -->
	</div>
<div class="table-sec">
<table align="center">
	<tr>
		<th>Profile Image</th>
		<th>User Name</th>
		<th>Email ID</th>
		<th>Mobile No</th>
		<th>Location</th>
	</tr>
	<tr>


		<?php
    require('db.php');
    session_start();
	$res=mysqli_query($con,"SELECT * from ureg");
			
	while($row=mysqli_fetch_array($res)) 
	{
		echo '<tr> 
		<td><img src="images/'.$row['uimage'].'" height="75px"></td> 
		<td>'.$row['uname'].'</td> 
		<td>'.$row['uemail'].'</td> 
		<td>'.$row['ucell'].'</td> 
		<td>'.$row['uaddress'].'</td> 

		</tr>';
	
}
?>
	</tr>
</table>

<div>
<footer>
	&copy; 2024 - Capture Connect.
</footer>
</body>

</html>