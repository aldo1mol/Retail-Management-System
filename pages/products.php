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
	<link rel="stylesheet" href="../css/template.css">
	<link rel="stylesheet" href="../css/product.css">
</head>
<body>
 <!-- sidebar -->
<section id="sidebar">
        <a href="#" class="brand">
            <i class="bx bxs-shopping-bag"></i>
            <span class="text">RMS</span>
        </a>

        <ul class="side-menu top">
            <li >
				<a href="../pages/dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
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
					<h1>Products</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Product</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-inventory">
                <span style="color:#fff; font-size:30px;" class="text">+</span>
                <span style="color:#fff;" class="text">Inventory</span>
				</a>
				<a href="#" class="btn-sell">
                <i style="color:#fff;" class='bx bxs-cart-alt'></i>
					<span style="color:#fff;" class="text">Sell Product</span>
				</a>
				<a href="#" class="btn-download">
					<i style="color:#fff;" class='bx bxs-cloud-download' ></i>
					<span style="color:#fff;" class="text">Export To Excel</span>
				</a>
			</div>

			<ul class="box-info">
                <li>
					<i class="bx bxs-shopping-bag"></i>
					<span class="text">
						<h3>5</h3>
						<p>Products</p>
					</span>
				</li>
                <li>
                <i class='bx bxs-category'></i>
					<span class="text">
						<h3>4</h3>
						<p>Categories</p>
					</span>
				</li>
                <li>
					<i class="bx bxs-calendar-check"></i>
					<span class="text">
						<h3>0</h3>
						<p>Products Sold</p>
					</span>
				</li>
              
			</ul>

			<!-- productTable -->
			<div class="table-data">
				<div class="recent">
					<div class="head">
						<h3>All Products</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>id#</th>
								<th>Product</th>
								<th>Category</th>
								<th>Quantity in stock</th>
								<th>Unit Price</th>
								<th>action</th>


							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>
									<p>Sweat Shirt</p>
								</td>
								<td><span class="category">T-Shirt</span></td>
								<td>420</td>
								<td>120.00</td>
								<td><i class='bx bx-dots-vertical-rounded' ></i></td>
							</tr>
							<tr>
								<td>2</td>
								<td>
									<p>Nike</p>
								</td>
								<td><span class="category">Sneakers</span></td>
								<td>50</td>
								<td>200.00</td>
								<td><i class='bx bx-dots-vertical-rounded' ></i></td>
							</tr>
							<tr>
								<td>3</td>
								<td>
									<p>Adidas</p>
								</td>
								<td><span class="category">Canvas</span></td>
								<td>60</td>
								<td>100.00</td>
								<td><i class='bx bx-dots-vertical-rounded' ></i></td>
							</tr>
							<tr>
							<td>4</td>
								<td>
									<p>Jordan</p>
								</td>
								<td><span class="category">Sneakers</span></td>
								<td>10</td>
								<td>500.00</td>
								<td><i class='bx bx-dots-vertical-rounded' ></i></td>
							</tr>
							<tr>
								<td>5</td>
								<td>
									<p>Adidas</p>
								</td>
								<td><span class="category">cap</span></td>
								<td>40</td>
								<td>200.00</td>
								<td><i class='bx bx-dots-vertical-rounded' ></i></td>
							</tr>
						</tbody>
					</table>
				</div>


        </main>
		<!-- main -->
	</section>
	<!-- content -->




    <script src="../js/template.js"></script>
</body>
</html>