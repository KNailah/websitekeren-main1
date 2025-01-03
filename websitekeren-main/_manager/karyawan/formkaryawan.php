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
				<h1>Tambah Data Karyawan</h1>
			</div>
			<form method="POST" action="">
				<div class="form-group row">
				  <label for="inputNIP" class="col-sm-2 col-form-label">NIP</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="nip" name="nip" required>
				  </div>
				</div>
				<div class="form-group row">
				  <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="nama" name="nama_karyawan" required>
				  </div>
				</div>
                <div class="form-group row">
                    <label for="inputdivisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="divisi" name="divisi" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="alamat" name="alamat_karyawan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtelepon" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telepon" name="telpon_karyawan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
				<div class="form-group row">
                    <label for="inputusername" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="inputpassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" required>
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
// Menyertakan koneksi database
include '../../koneksi/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['simpan'])) {
    // Mengambil data dari form
    $nip = mysqli_real_escape_string($conn, $_POST['nip']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama_karyawan']);
    $divisi = mysqli_real_escape_string($conn, $_POST['divisi']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat_karyawan']);
    $telepon = mysqli_real_escape_string($conn, $_POST['telpon_karyawan']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Cek apakah NIP sudah ada di database
    $check_query = "SELECT * FROM data_karyawan WHERE nip = '$nip'";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
        // Jika NIP sudah ada
        echo "<script>alert('NIP sudah terdaftar! Silakan masukkan NIP lain.');</script>";
    } else {
        // Enkripsi password
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk menambahkan data
        $query = "INSERT INTO data_karyawan (nip, nama_karyawan, divisi, alamat_karyawan, telpon_karyawan, email, username, password) 
                  VALUES ('$nip', '$nama', '$divisi', '$alamat', '$telepon', '$email', '$username', '$password')";

        // Eksekusi query
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Data berhasil disimpan!'); window.location.href = 'karyawan.php';</script>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
}
?>


	<script src="script.js"></script>
</body>
</html>
