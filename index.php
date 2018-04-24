<!DOCTYPE html>
<html>
	<head>
		<style>
	body{
		margin: 0px;
	}
			#header{
				text-align: center;
				background-color: #003300;
				color: #FFF;
				padding: 10px 0px;
			}
			#LHS,#RHS{
				width:50%;
				height: 90vh;
				float: left;
			}
			#LHS{
				background: #32cd32;
			}
			#LHS-inner{
				margin: 10px;
				padding: 20% 20px;
				text-align:center;
				background-color: #FFF;
				color:#003300;
				line-height: 40px;
			}
			#RHS{
				background: #32cd32 url('images/matt.JPG') center no-repeat;
				background-size: cover;
			}
		</style>
	</head>
	<body>
		<div id="body-container">
			<div id="header"><h1>ADEDAYO MATTHEWS</h1></div>
			<div id="content-wrapper">
				<div id="LHS">
					<div id="LHS-inner">
					<h2>Hey there, I’m Adedayo Matthews and this is my first time of using Figma as a design tool. I’m doing this for the HNG Internship</h2>
					<?php 
					date_default_timezone_set('Africa/Lagos');
					$today = new DateTime();
					?>
					<h4>Time and Date From PHP DateTime Class: <?php echo $today->format('d - M - Y, h:i:s'); ?></h4>
					</div>
				</div>
				<div id="RHS"></div>
			</div>
		</div>
	</body>
</html>