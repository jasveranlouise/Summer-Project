<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dashboard.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>FA/css/font-awesome.min.css" />
	
	<title>Dashboard</title>

</head>

	<body style="background-color: #effcf4">

		<!-- Navbar -->	
		<div class="w3-bar" style="background-color: #323132;">
		  
		  <a href="#" class="w3-bar-item w3-button w3-right w3-hover-none w3-text-grey w3-hover-text-white">Admin 
		  <i class="fa fa-user" aria-hidden="true"></i></a>
		 
		  

		</div>
		<!-- Sidebar -->
		<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%; ">
		  <br>
		  <a href="#" class="w3-bar-item w3-button">Overview</a>
		  <a href="#" class="w3-bar-item w3-button">History</a>
		  <a href="#" class="w3-bar-item w3-button">Reports</a>
		</div>

		<!-- Content -->
		<div style="margin-left:15%">

		<div class="w3-container" style="background-color: #1fa67b; color:white">
		  <h1>Dashboard</h1>
		</div>
		<br>
		
			<div class="w3-container w3-col" style="width:0%">
				
			</div>
			
			<div class="w3-container w3-col w3-border w3-row" style="width:100%">
			<br>
			<center>
				<div class="w3-col" style="width: 25%">						
					<div class="w3-card-4 w3-center w3-border" style="width:240px; height: 143px; background-color: #bdd2e5;"><br>
						<i class="fa fa-tint fa-5x" aria-hidden="true" style="font-size: 80px; margin-bottom: 8px; color: #4681b4"></i>
						<div class="w3-container w3-center" style="height: 30px; font-size: 18px; background-color: #4681b4; color: white">Water</div>
					</div>
				</div>
																
				<div class="w3-col" style="width: 25%">
					<div class="w3-card-4 w3-center w3-border" style="width:240px; height: 143px; background-color: #f2cd75"><br>
						<i class="fa fa-internet-explorer fa-5x" aria-hidden="true" style="font-size: 70px; margin-bottom: 18px; color: #ce9613"></i>
						<div class="w3-container w3-center" style="height: 30px; font-size: 18px; background-color: #ce9613; color: white">Internet</div>
					</div>
				</div>
		
				<div class="w3-col" style="width: 25%">						
					<div class="w3-card-4 w3-center w3-border" style="width:240px; height: 143px; background-color: #f7cac9"><br>
						<i class="fa fa-television fa-5x" aria-hidden="true" style="font-size: 80px; margin-bottom: 8px; color: #e65755"></i>		
						<div class="w3-container w3-center" style="height: 30px; font-size: 18px; background-color: #e65755; color: white">Cable</div>	
					</div>
					<br>
				</div>

				<div class="w3-col" style="width: 25%">						
					<div class="w3-card-4 w3-center w3-border" style="width:240px; height: 143px; background-color:#d2a2c9 "><br>			
						<i class="fa fa-credit-card fa-5x" aria-hidden="true" style="font-size: 80px; margin-bottom: 8px; color: #854078"></i>		
						<div class="w3-container w3-center" style="height: 30px; font-size: 17px; background-color: #854078; color: white">Credit Card</div>	
					</div>
					<br>
				</div>
			</center>		
			
			</div>
			
			<div class="w3-container w3-col" style="width:0%">
				
			</div>
			<br><br>

			<div class="w3-row">
			<br>
			<div class="w3-container w3-col w3-border" style="width: 48.075%; height: 330px">
				
			</div>
			<div class="w3-container w3-col" style="width: 3.85%">
				
			</div>
			<div class="w3-container w3-col w3-border" style="width: 48.075%; height: 330px">
				
			</div>
			</div>
		

	</body>
</html>