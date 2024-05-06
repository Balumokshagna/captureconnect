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
								href="addevents.php">events<span class="sr-only">(current)</span>
							</a></li>
							<li class="nav-item"><a class="nav-link"
								href="photograperhome.php">old bookings <span class="sr-only">(current)</span>
							</a></li>
							<li class="nav-item active"><a class="nav-link" href="newdbooking.php">
									<i class="fa fa-user" aria-hidden="true"></i> new bookings
							</a></li>

                            <li class="nav-item"><a class="nav-link" href="pprofile.php">
									<i class="fa fa-user" aria-hidden="true"></i> my photos
							</a></li>
							<li class="nav-item"><a class="nav-link" href="index.html">
									<i class="fa fa-user" aria-hidden="true"></i> logout
							</a></li>
							
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!-- end header section -->
	</div>


	<!-- service section -->
	
	<div class="table-sec">

	<!-- service section -->
	<table align="center"  border="1">
	<tr>
		<th>Profile Image</th>
		<th>User Name</th>
		<th>Photograper Name</th>
		<th>Appointment Date</th>
		<th>Location</th>
		<th>Appointment Status</th>
		<th>Payment</th>
	</tr>	
	<tr>


		<?php
    require('db.php');
    session_start();
	$pname=$_SESSION['username'];
	$res=mysqli_query($con,"SELECT * from appointments where pname='$pname'");
			
	while($row=mysqli_fetch_array($res)) 
	{
echo '<tr> 
<td><img src="images/w4.png" height="100"></td> 
<td>'.$row['uname'].'</td> 
<td>'.$row['pname'].'</td> 
<td>'.$row['odate'].'</td> 
<td>'.$row['uaddress'].'</td> 
<td>'.$row['ustatus'].'</td>



<td>';

echo '<a class="accp-btn" href="puaccept.php?id=' . $row['id']. '">ACCEPT</a>';
echo '<a class="rej-btn" href="pureject.php?id=' . $row['id']. '">REJECT</a>';

	}
?>


</td></tr></table>
 
</div>
<footer>
	&copy; 2024 - Capture Connect.
</footer>
</body>

</html>