<?php
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>HemoGlow | About Us </title>
	<!-- Meta tag Keywords -->
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('includes/header.php');?>

	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<!-- <div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">About Us</li>
			</ol>
		</div>
	</div> -->
	<!-- //page details -->

	<!-- about -->
	<section class="about">
		<div class="container py-xl-2 py-lg-2">
		<div class="w3ls-titles text-center mb-md-5 mb-4">
				<h3 class="title">Vision</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="py-3">Our mission is to create a centralized platform that connects blood donors with those in need, making the process of blood donation more efficient and accessible. Through our website, we aim to promote awareness and educate the public on the importance of regular blood donation. By leveraging technology to streamline the process and connect donors with recipients in real-time, we hope to make a positive impact on the lives of those in need of life-saving blood transfusions.</p>
			</div>		
		</div>
	</section>
	
	<!-- our teams -->
	<section class="p-5">
	<h3 class="title py-xl-2 py-lg-2">Our Centres</h3>
	<div class="card-deck">
	<div class="card">
    <img src="images\b.png" class="card-img-top team-img" alt="saad khanzada" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">HemoGlow Bharathi nagar</h4>
      <p class="card-text">Address: 2/2, Sannathy St, behind Reliance Trends, Bharathi nagar, Ramanathapuram, Tamil Nadu 623502</p>      
	  <div class="row p-2">
	  
	  </div>
    </div>
  </div>

  <div class="card">
    <img src="images\e.png" class="card-img-top team-img" alt="noor" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">HemoGlow Kenikarai</h4>
      <p class="card-text">Address: 68, Madurayar street, Aranmanai road, Kenikarai, Ramanathapuram, Tamil Nadu 623501</p>      
	  <div class="row p-2">
	
	  </div>
    </div>
  </div>
  
  <div class="card">
    <img src="images\f.png" class="card-img-top team-img" alt="ritik" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">HemoGlow Paramakudi</h4>
      <p class="card-text">Address: 3/37, S.M.Agraharam St, opp. Head Post Office, Athuppalam, Paramakudi, Ramanathapuram, Tamil Nadu 623707</p>      
	  <div class="row p-2">
	
	  </div>
    </div>
  </div>
</div>
</section>
	<!-- //about -->



	<?php include('includes/footer.php');?>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>