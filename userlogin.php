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
                        <li class="nav-item">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
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
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `ureg` WHERE uname='$username' AND upass='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
          $res=mysqli_query($con,$query);
          while($row=mysqli_fetch_array($res)) 
	{
            $_SESSION['uname'] = $username;
            $_SESSION['ucell'] = $row['ucell'];
            $_SESSION['uaddress'] = $row['uaddress'];
  }
            // Redirect to user dashboard page
            header("Location: userhome.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='userLogin.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"  required/>
        <input type="password" class="login-input" name="password" placeholder="Password" p required/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="userreg.php" class="new-reg">New Registration?</a></p>
  </form>
<?php
    }
?>


 
 

</body>

</html>