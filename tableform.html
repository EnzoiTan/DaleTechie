<?php include_once('config.php'); ?>

<!doctype html>
<html lang="en">

<head>
	<title>List of Set Schedule</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/tableform.css">

</head>

<body>
	<a href="index.php" title="Back">
		<svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
			<path d="m12.017 1.995c5.517 0 9.997 4.48 9.997 9.998s-4.48 9.998-9.997 9.998c-5.518 0-9.998-4.48-9.998-9.998s4.48-9.998 9.998-9.998zm0 1.5c-4.69 0-8.498 3.808-8.498 8.498s3.808 8.498 8.498 8.498 8.497-3.808 8.497-8.498-3.807-8.498-8.497-8.498zm-1.528 4.715s-1.502 1.505-3.255 3.259c-.147.147-.22.339-.22.531s.073.383.22.53c1.753 1.754 3.254 3.258 3.254 3.258.145.145.335.217.526.217.192-.001.384-.074.531-.221.292-.293.294-.766.003-1.057l-1.977-1.977h6.693c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-6.693l1.978-1.979c.29-.289.287-.762-.006-1.054-.147-.147-.339-.221-.53-.222-.19 0-.38.071-.524.215z" fill-rule="nonzero" />
		</svg>
	</a>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="title">LISTS OF SET SCHEDULE</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
							<thead class="thead-primary">
								<tr>
									<th class="first">Approve</th>
									<th class="second">Repair & Services</th>
									<th class="third">Selected Date</th>
									<th class="fourth">Selected Time</th>
									<th class="fifth">Full Name</th>
									<th class="sixth">Contact Number</th>
									<th class="seventh">Time Scheduled</th>
								</tr>
							</thead>


							<tbody>

								<?php

								if (isset($_GET['search'])) {
									$query = $_GET['query'];
									$query = htmlspecialchars($query);
									$raw_results = mysqli_query($conn, "SELECT * FROM user_form WHERE (`fullname` LIKE '%" . $query . "%')");
									if (mysqli_num_rows($raw_results) > 0) {
										echo '<p>Showing result/s for "' . $query . '"</p><button class="view"><a class="view" href="tableform.php">View All Records</button>';
										while ($results = mysqli_fetch_array($raw_results)) {
								?>

											<tr>
												<td scope="row" class="scope"></td>
												<td><?php echo $results['repair']; ?></td>
												<td><?php echo $results['date']; ?></td>
												<td><?php echo $results['time']; ?></td>
												<td><?php echo $results['fullname']; ?></td>
												<td><?php echo $results['contact']; ?></td>
												<td><?php echo $results['sched_when']; ?></td>
											</tr>

										<?php

										}
									} else {
										echo '<p>No result for "' . $query . '"</p><button class="view"><a class="view" href="tableform.php">View All Records</button>';
									}
								} else {
									$raw_results = mysqli_query($conn, "SELECT * FROM user_form");
									while ($results = mysqli_fetch_array($raw_results)) {
										?>

										<tr>
											<td scope="row" class="scope"></td>
											<td><?php echo $results['repair']; ?></td>
											<td><?php echo $results['date']; ?></td>
											<td><?php echo $results['time']; ?></td>
											<td><?php echo $results['fullname']; ?></td>
											<td><?php echo $results['contact']; ?></td>
											<td><?php echo $results['sched_when']; ?></td>
										</tr>

								<?php
									}
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>