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
							
						
							<li class="nav-item active"><a class="nav-link"
								href="userhome.php">my bookings <span class="sr-only">(current)</span>
							</a></li>
							<li class="nav-item"><a class="nav-link" href="bookphotograper.php">
									<i class="fa fa-user" aria-hidden="true"></i> photographers
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
<br>

	<!-- service section -->


		<?php
    require('db.php');
    session_start();
    if (isset($_GET['pname'])){ 
        $pname=$_GET['pname']; 
	$res=mysqli_query($con,"SELECT * from imgs where pname='$pname'");
			
	while($row=mysqli_fetch_array($res)) 
	{
echo '<div class="col-md-4" style="display: inline-block;"><img src="images/'.$row['imgn'].'" class="img-wh"></div>'  ;





	}
}
?>



<style>
        /* Designing all grid */
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            background-color: gray;
            padding: 10px;
        }
 
        /* Designing all grid-items */
        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid black;
            padding: 20px;
            font-size: 30px;
            text-align: center;
        }
		.img-wh{
			width: 500px;
			height: 300px;
			margin-bottom: 20px;
		}
    </style>

</body>

</html>