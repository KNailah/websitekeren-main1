<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- CSS -->
	<link rel="stylesheet" href="datacuti.css">

	<title>Sistem Pengajuan Cuti</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<div class="brand">
			<img class="bx" src="img/logo-kota-jambi-removebg-preview.png" alt="logo jambi" class="logo">
			<span class="text">PT Jambi Sejahtera <br> Sistem Pengajuan Cuti</span>
		</div>
		<ul class="side-menu top">
			<li>
				<a href="../index.html">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="../karyawan/karyawan.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Data Karyawan</span>
				</a>
			</li>
			<li>
				<a href="../riwayatcuti/riwayat.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Riwayat Pengajuan Cuti</span>
				</a>
			</li>
			<li class="active">
				<a href="../datacuti/datacuti.php">
					<i class='bx bxs-inbox' ></i>
					<span class="text">Data Pengajuan Cuti</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="../../login.php" class="logout">
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
			<p class="nav">Have a Nice Day!</p>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="profile">
				<img src="img/profile.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="left">
				<h1>Data Pengajuan Cuti</h1>
			</div>
			
			<div class="table-data">
				<div class="tabel">
					<table class="table table-striped table-hover">
						<thead class="table-dark">
							<tr>
								<th>No.</th>
								<th>NIP</th>
								<th>Nama</th>
								<th>Jenis Cuti</th>
								<th>Alasan Cuti</th>
								<th>Mulai Cuti</th>
								<th>Selesai Cuti</th>
								<th>Lama Cuti</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody class="font">
							<?php
							// Include koneksi database
							include '../../koneksi/koneksi.php';

							// Query untuk mendapatkan data 
							$query = "SELECT * FROM data_pengajuancuti";
							$result = $conn->query($query);
							$no = 1;

							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>{$no}</td>";
									echo "<td>{$row['nip']}</td>";
									echo "<td>{$row['nama_karyawan']}</td>";
									echo "<td>{$row['alasan_cuti']}</td>";
									echo "<td>{$row['jenis_cuti']}</td>";
									echo "<td>{$row['mulai_dari']}</td>";
									echo "<td>{$row['sampai']}</td>";
									echo "<td>{$row['lama_cuti']}</td>";
									echo "<td>
											<a href='#' class='btn btn-sm btn-success'>Disetujui<i class='bx bxs-edit-alt'></i></a><br>
											<a href='#' class='btn btn-sm btn-danger'>Ditolak<i class='bx bxs-trash'></i></a>
										  </td>";
									echo "</tr>";
									$no++;
								}
							} else {
								echo "<tr><td colspan='8'>Tidak ada data pengajuan cuti/td></tr>";
							}
							?>
									
						</tbody>
					</table>	 
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>