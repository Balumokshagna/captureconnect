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

<title>make payment</title>

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
							make payment </span>
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
							<form class="form-inline">
								<button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
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
    $pname=$_GET['pname']; 
    $id=$_GET['id']; 
    //echo $id;
   // echo $pname;
   // echo  $_SESSION['username'];
    // When form submitted, check and create user session.
    if (isset($_REQUEST['cardNum'])) {
        // removes backslashes
        //$username = $_SESSION['username'];
		$cardNum = stripslashes($_REQUEST['cardNum']);
		$Amount = stripslashes($_REQUEST['Amount']);
        //escapes special characters in a string
		$sql="UPDATE  appointments SET pstatus='complete',Accno='$cardNum',aamount='$Amount' WHERE id='$id'"; 

	
      $result   = mysqli_query($con, $sql);
        if ($result) {
            echo "<div class='form'>
                  <h3>paymeny  successfully.</h3><br/>
                  <p class='link'>Click here to <a href='userhome.php'>HOME</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='userhome.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">submit bank details</h1><br>
        <input type="text" class="login-input" name="id" value="<?php echo $id ?>"  />
        <input type="text" class="login-input" name="pname" value="<?php echo $pname ?>"/>
		<input type="text" class="login-input" name="Amount" placeholder="Amount"/>

		<label for="cardNum">Credit Card Number: </label> 
                        <input type="text" name="cardNum"placeholder="1111 2222-3333-4444" 
                               maxlength="19" required> 
							   <br>
                        <label for="">Exp Month:</label> <br>
                        <select name="month" id=""> 
                            <option value="">Choose month</option> 
                            <option value="January">January</option> 
                            <option value="February">February</option> 
                            <option value="March">March</option> 
                            <option value="April">April</option> 
                            <option value="May">May</option> 
                            <option value="June">June</option> 
                            <option value="July">July</option> 
                            <option value="August">August</option> 
                            <option value="September">September</option> 
                            <option value="October">October</option> 
                            <option value="November">November</option> 
                            <option value="December">December</option> 
                        </select> 
						<br>
  
  
                 
                            <label for="">Exp Year:</label> <br>
                            <select name="year" id=""> 
                                <option value="">Choose Year</option> 
                                <option value="2023">2023</option> 
                                <option value="2024">2024</option> 
                                <option value="2025">2025</option> 
                                <option value="2026">2026</option> 
                                <option value="2027">2027</option> 
                            </select> 
                      
							<br>
                       
                            <label for="cvv">CVV</label> <br>
                            <input type="number" name="cvv" 
                                   placeholder="1234" required> 
								   <br><br>

        <input type="submit" name="submit" value="make payment" class="login-button">
     
    </form>
<?php
    }
?>


 
 

</body>

</html>