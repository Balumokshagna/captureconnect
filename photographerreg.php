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

<title>photograper</title>

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
					<a class="navbar-brand" href="index.html"> 
          <img src="images/logo.png" width="100">
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class=""> </span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav  ">
                        <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="userlogin.php"> user</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="photographer.php">photograper</a>
              </li>
       
              <li class="nav-item">
                <a class="nav-link" href="admin.php"> <i class="fa fa-user" aria-hidden="true"></i> Admin Login</a>
              </li>
							
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
    // When form submitted, check and create user session.
    if (isset($_REQUEST['username'])) {
      $image = $_FILES["uploadfile"]["name"];
      $tempname = $_FILES["uploadfile"]["tmp_name"];
      $folder = "./images/" . $image;
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
      
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $pcell    = stripslashes($_REQUEST['pcell']);
        $pcell    = mysqli_real_escape_string($con, $pcell);

        $paddress    = stripslashes($_REQUEST['paddress']);
        $paddress    = mysqli_real_escape_string($con, $paddress);
    
        $query    = "INSERT INTO `preg` (`pname`, `ppass`, `pmail`, `pcell`, `paddress`, `pimage`, `pstatus`) VALUES ('$username', '$password', '$email', '$pcell', '$paddress','$image', 'pending');";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='photographer.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='photographer.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form reg-form" action="" enctype="multipart/form-data" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />     
        <input type="password" class="login-input" name="password" placeholder="Password" required>
        <input type="email" class="login-input" name="email" placeholder="Email Adress" required>
        <input type="tel" class="login-input" name="pcell" placeholder="cell number"  required />
        <input type="text" class="login-input" name="paddress" placeholder="Address" required />
        <input type="file" name="uploadfile" value=""  required /><br><br>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="photographer.php" class="new-reg">Click to Login</a></p>
    </form>
<?php
    }
?>


 
 

</body>

</html>