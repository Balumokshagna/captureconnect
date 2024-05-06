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
								href="addevents.php">events<span class="sr-only">(current)</span>
							</a></li>
							<li class="nav-item"><a class="nav-link"
								href="photograperhome.php">old bookings <span class="sr-only">(current)</span>
							</a></li>
							<li class="nav-item"><a class="nav-link" href="newdbooking.php">
									<i class="fa fa-user" aria-hidden="true"></i> new bookings
							</a></li>

                            <li class="nav-item"><a class="nav-link" href="pprofile.php">
									<i class="fa fa-user" aria-hidden="true"></i> my  photos
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

    <?php
    require('db.php');
    session_start();
    $pname=$_SESSION['username'];
    // When form submitted, check and create user session.
    if (isset($_REQUEST['username'])) {
      $image = $_FILES["uploadfile"]["name"];
      $tempname = $_FILES["uploadfile"]["tmp_name"];
      $folder = "./images/" . $image;
        // removes backslashes
         $pname=$_SESSION['username'];
    
        $query    = "INSERT INTO `imgs` (`pname`,`imgn`) VALUES ('$pname','$image');";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>added successfully.</h3><br/>
                  <p class='link'>Click here to <a href='addevents.php'>again</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='photographer.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" enctype="multipart/form-data" method="post">
        <h1 class="login-title">Add Images</h1>
        <input type="text" class="login-input" name="username" placeholder="Username"  value="<?php    echo "$pname"?>"/> 
        <input type="file" name="uploadfile" value=""  required />     
        <input type="submit" name="submit" value="ADD" class="login-button">
      
    </form>
<?php
    }
?>

 

</body>

</html>