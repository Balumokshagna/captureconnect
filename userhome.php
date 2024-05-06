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
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
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


	<!-- service section -->
	<div class="table-sec">
	<!-- service section -->
	<table align="center"  border="1">
	<tr>
		<th>S.NO</th>
		<th>User Name</th>
		<th>Photograper Name</th>
		<th>Appointment Date</th>
		<th>Mobile No</th>
		<th>Location</th>
		<th>Appointment Status</th>
		<th>Payment Status</th>
	</tr>
	<tr>
		<?php
    require('db.php');
    session_start();
	$res=mysqli_query($con,"SELECT * from appointments");
			
	while($row=mysqli_fetch_array($res)) 
	{  $id=$row['id'];
		$pname=$row['pname'];
echo '<tr> 
<td width="50px">'.$row['id'].'</td> 
<td>'.$row['uname'].'</td> 
<td>'.$row['pname'].'</td> 
<td>'.$row['odate'].'</td> 
<td>'.$row['ucell'].'</td> 
<td>'.$row['uaddress'].'</td> 
<td style="text-align: center;"><span class="accept-txt">' . $row['ustatus'] . '</span></td>
<!--<td style="text-align: center;"><span class="completed-txt"><a href="payment.php?id=$id&pname=$pname">'.$row['pstatus'].'</a></span></td>-->
<td style="text-align: center;"><span class="completed-txt"><a href="javascript:void(0)" class="btn btn-sm buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png" data-amount="1000" data-id="1">Pay</a></span></td>
<td style="background-color:#eee; display:none;">';



//echo "<a href='payment.php?id=$id&pname=$pname'>Payment</a>";



	}
?>


</td></tr></table>
</div>
<footer>
	&copy; 2024 - Capture Connect.
</footer>



<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_MGWGsjkJ3Kthbl",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Tutsmake",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'process_payment.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.`preventDefault`();
  });

</script>

<script src=""></script>

<script>
 
  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_MGWGsjkJ3Kthbl", // secret key id
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Tutsmake",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'process_payment.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
 
               window.location.href = 'payment-success.php';
            }
        });
      
    },
 
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });
 
</script>
</body>
</html>
