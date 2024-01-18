<?php
    if (isset($_GET['id'])) {
        $id_kategori = $_GET['id'];
        require_once 'db_conn.php';

        $sql_varian = "SELECT id, nama, harga, deskripsi, gambar FROM eskrim WHERE kategori_id = $id_kategori";
        $result_varian = $conn->query($sql_varian);
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Robbins'Fresh</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="./img/logo-nav.png" alt="logo">
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#" onclick="showContent('dashboardContent');">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#" onclick="showContent('orderContent');">
					<i class='bx bxl-shopify'></i>
					<span class="text">Order</span>
				</a>
			</li>
			<li>
				<a href="#"  onclick="showContent('StockContent');">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Stock</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-store'></i>
					<span class="text">Product</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
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
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<i class='bx bxs-user-circle'></i>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main id="dashboardContent">
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
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>0</h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>0</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>Rp. 0</h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Payment</th>
								<th>Date Order</th>
								<th>Status</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<i class='bx bxs-user-circle'></i>
									<p>Abdul</p>
								</td>
								<td>Gopay</td>
								<td>10-01-2024</td>
								<td><span class="status completed">Completed</span></td>
								<td>Rp. 15.000</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->

		<main id="orderContent">
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Order History</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Payment</th>
								<th>Date Order</th>
								<th>Status</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<i class='bx bxs-user-circle'></i>
									<p>Abdul</p>
								</td>
								<td>Gopay</td>
								<td>10-01-2024</td>
								<td><span class="status completed">Completed</span></td>
								<td>Rp. 15.000</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>

		<main id="StockContent">
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Stock</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Image</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/chocolate-cone.png" alt="stock 1">
								</td>
								<td>Chocolate Ice Cream</td>
								<td>Rp. 15.000</td>
								<td>10</td>
								<td><span class="status completed">Completed</span></td>
								<td>
									<span class="action">
										<i class='bx bxs-pencil'></i>
										<i class='bx bxs-plus-square'></i>
										<i class='bx bxs-trash-alt'></i>
									</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>



	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>