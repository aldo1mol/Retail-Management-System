<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS</title>
	<link rel="shortcut icon" href="https://boxicons.com/?query=shopping+bag">
    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/dashboard.css">
	<link rel="stylesheet" href="../css/template.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.40.0/apexcharts.min.css"/>
</head>
<body>
 <!-- sidebar -->
<section id="sidebar">
        <a href="#" class="brand">
            <i class="bx bxs-shopping-bag"></i>
            <span class="text">RMS</span>
        </a>

        <ul class="side-menu top">
            <li class="active">
				<a href="../pages/dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="../pages/products.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Products</span>
				</a>
			</li>
			<li>
				<a href="../pages/analytics.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">Sales</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Employees</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="../index.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
       </ul>
    </section>
    <!-- sidebar -->
     
    
	<!-- content -->
	<section id="content">
		<!-- navbar -->
        <?php
		   include "../include/navbar.php"
        ?>
		<!-- navbar -->

		<!-- main -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Export To Excel</span>
				</a> -->
			</div>

			<ul class="box-info">
                <li>
					<i class="bx bxs-calendar-check"></i>
					<span class="text">
						<h3>0</h3>
						<p>Reports</p>
					</span>
				</li>

				<li>
					<i class="bx bxs-group"></i>
					<span class="text">
						<h3>0</h3>
						<p>Customers</p>
					</span>
				</li>
				<li>
					<i class="bx bxs-dollar-circle"></i>
					<span class="text">
						<h3>0</h3>
						<p>Sales</p>
					</span>
				</li>
                <li>
					<i class="bx bxs-shopping-bag"></i>
					<span class="text">
						<h3>0</h3>
						<p>Products</p>
					</span>
				</li>
                <li>
					<i class="bx bxs-group"></i>
					<span class="text">
						<h3>0</h3>
						<p>Employees</p>
					</span>
				</li>
              
			</ul>
 

			
				
				

			
			
			<!-- charts -->

        </main>
		<!-- main -->
	</section>
	<!-- content -->


    <script src="../js/template.js"></script>
	<script src="../js/dashboard.js"></script>
</body>
</html>