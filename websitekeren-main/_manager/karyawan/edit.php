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
	<link rel="stylesheet" href="form.css">

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
			<a href="#" class="profile">
				<img src="img/profile.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="left">
				<h1>Edit Data Karyawan</h1>
			</div>
			<form method="POST" action="">
				<div class="form-group row">
				  <label for="inputNIP" class="col-sm-2 col-form-label">NIP</label>
				  <div class="col-sm-10">
					<input type="nip" class="form-control" id="nip" name="nip">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
				  <div class="col-sm-10">
					<input type="nama" class="form-control" id="nama" name="nama">
				</div>
				</div>
                <div class="form-group row">
                    <label for="inputdivisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="divisi" class="form-control" id="divisi" name="divisi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="alamat" class="form-control" id="alamat" name="alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtelepon" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                      <input type="telepon" class="form-control" id="telepon" name="telepon">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
				<div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="username" class="form-control" id="username" name="username">
                    </div>
                </div>
				<div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
				<div class="form-group row">
				  <div class="col-sm-10">
					<button type="submit" class="btn btn-primary" name="simpan">Submit</button>
				  </div>
				</div>
			</form>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<?php
include '../../koneksi/koneksi.php';

if (isset($_POST['simpan'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $divisi = $_POST['divisi'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password']; // Pastikan menggunakan hashing untuk keamanan

    // Query untuk update data
    $query = "UPDATE data_karyawan SET 
        nama_karyawan='$nama',
        divisi='$divisi',
        alamat_karyawan='$alamat',
        telpon_karyawan='$telepon',
        email='$email',
        username='$username',
        password=('$password') 
        WHERE nip='$nip'";

    if ($conn->query($query) === TRUE) {
        echo "<script>alert('Data berhasil diupdate!'); window.location.href='karyawan.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>


	<script src="script.js"></script>
</body>
</html>