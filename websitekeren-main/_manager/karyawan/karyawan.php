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
	<link rel="stylesheet" href="karyawan.css">

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
			<li class="active">
				<a href="karyawan.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Data Karyawan</span>
				</a>
			</li>
			<li>
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
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="left">
				<h1>Data Karyawan</h1>
				<a href="formkaryawan.php" class="btn btn-primary btn-md">Tambah</a>
			</div>
			
			<div class="table-data">
				<div class="tabel">
					<table class="table table-striped table-hover">
						<thead class="table-dark">
							<tr>
								<th>No.</th>
								<th>NIP</th>
								<th>Nama</th>
								<th>Divisi</th>
								<th>Alamat</th>
								<th>Telepon</th>
								<th>Email</th>
								<th>Username</th>
								<th>Password</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody class="font">
							<?php
							// Include koneksi database
							include '../../koneksi/koneksi.php';

							// Query untuk mendapatkan data karyawan
							$query = "SELECT * FROM data_karyawan";
							$result = $conn->query($query);
							$no = 1;

							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>{$no}</td>";
									echo "<td>{$row['nip']}</td>";
									echo "<td>{$row['nama_karyawan']}</td>";
									echo "<td>{$row['divisi']}</td>";
									echo "<td>{$row['alamat_karyawan']}</td>";
									echo "<td>{$row['telpon_karyawan']}</td>";
									echo "<td>{$row['email']}</td>";
									echo "<td>{$row['username']}</td>";
									echo "<td>{$row['password']}</td>";
									echo "<td>
											<a href='edit.php?id={$row['nip']}' class='btn btn-sm btn-primary'><i class='bx bxs-edit-alt'></i></a>
											<a href='delete.php?id={$row['nip']}' class='btn btn-sm btn-danger'><i class='bx bxs-trash' value='hapus'></i></a>
										  </td>";
									echo "</tr>";
									$no++;
								}
							} else {
								echo "<tr><td colspan='8'>Tidak ada data karyawan</td></tr>";
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
