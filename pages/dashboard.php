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
	<!-- bootstrap -->
	<link rel="stylesheet" href="../lib/bootstrap.min.css">
	<script src="../lib/bootstrap.min.js"></script>
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/dashboard.css">
	<link rel="stylesheet" href="../css/template.css">
</head>
<body style="margin:0;">
<!-- sidebar -->
<section class="m-0" id="sidebar">
        <a href="#" class="brand">
            <i class="bx bxs-shopping-bag"></i>
            <span class="text">RMS</span>
        </a>

        <ul class="side-menu top p-0">
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
		<ul class="side-menu p-0">
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
				 <a href="#" class="btn-download">
					<span style="color:#fff;" class="text">Remember list</span>
					<span style="color:#fff" class="numb">0</span>
				</a>
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
						<h3>5</h3>
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
<!-- Recently added items -->
			<div class="table-data">
				<div class="recent">
					<div class="head">
						<h3>Recently Added Products</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Product</th>
								<th>Date Added</th>
								<th>Category</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Sweat Shirt</p>
								</td>
								<td>01-08-2023</td>
								<td><span class="category">T-Shirt</span></td>
							</tr>
							<tr>
								<td>
									<p>Nike</p>
								</td>
								<td>01-08-2023</td>
								<td><span class="category">Sneakers</span></td>
							</tr>
							<tr>
								<td>
									<p>Jordan</p>
								</td>
								<td>01-08-2023</td>
								<td><span class="category">Sneakers</span></td>
							</tr>
							<tr>
								<td>
									<p>Nike</p>
								</td>
								<td>01-08-2023</td>
								<td><span class="category">Cap</span></td>
							</tr>
							<tr>
								<td>
									<p>Adidas</p>
								</td>
								<td>01-08-2023</td>
								<td><span class="category">Cap</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<input type="checkbox" name="checkbox" value="completed" id=check title="completed">
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<input type="checkbox" name="checkbox" value="completed" id=check title="completed">
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<input type="checkbox" name="checkbox" value="completed" id=check title="completed">
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<input type="checkbox" name="checkbox" value="completed" id=check title="completed">
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<input type="checkbox" name="checkbox" value="completed" id=check title="completed">
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>


        </main>
		<!-- main -->
	</section>
	<!-- content -->




    <script src="../js/template.js"></script>
</body>
</html>