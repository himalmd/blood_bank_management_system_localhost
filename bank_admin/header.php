<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="/bloodbank/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script type="text/javascript" src="/bloodbank/js/script.js"></script>

	<style>
		.fa{
	        font-size: 22px;
            margin-right: 10px;
            color: #04A5AA;
	    }
	    i{
	        height: 20px;
	        width: 20px;
	    }
	    .sidebar-menu{
	        font-family: 'Roboto', sans-serif;
	        font-weight: 400;
            font-size: 18px;
	    }
	    .contain a.active {
            color: #04A5AA;
            font-weight: 400;
        }
	</style>

	<?php
	date_default_timezone_set("Asia/Colombo");
	?>	


</head>

<body>

	<div class="top-bar clearfix">

		<a href="/bloodbank/index"><div class="logo">
        </div></a>

			<div class="top-bar-links">

				<ul>

					<li><a href="/bloodbank/index.php"><i class="fa fa-home"></i>Home</a></li>

					<!--<li><a href="#"><i class="fa fa-mobile"></i>Contact Donor</a></li>

					<li><a href="#"><i class="fa fa-tty"></i>Contact Organization</a></li>

					<li><a href="#"><i class="fa fa-bed"></i>Campaigns</a></li>-->


					<li><a href="/bloodbank/bank_admin/application/logout.php"><i class="fa fa-sign-out"></i>Admin Log Out</a></li>

				</ul>

			</div>	<!--top-bar-links-->

			

	</div>	<!--top-bar-->


</body>

</html>