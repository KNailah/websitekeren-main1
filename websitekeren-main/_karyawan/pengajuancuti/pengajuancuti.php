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
    <link rel="stylesheet" href="pengajuan.css">

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
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="../pengajuancuti/pengajuancuti.php">
                    <i class='bx bxs-group'></i>
                    <span class="text">Pengajuan Cuti</span>
                </a>
            </li>
            <li>
                <a href="../riwayatcuti2/riwayatcuti2.php">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Riwayat Pengajuan Cuti</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="../../login.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
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
            <i class='bx bx-menu'></i>
            <p class="nav">Have a Nice Day!</p>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="left">
                <h1>Pengajuan Cuti</h1>
            </div>
            <form method="POST" action="pengajuancuti.php">
                <div class="form-group row">
                    <label for="ke" class="col-sm-2 col-form-label">Pengajuan Ke</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ke" name="ke">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nip" name="nip">
                    </div>
                </div>
                <fieldset class="form-group row">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis Cuti</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_cuti" id="gridRadios1" value="Cuti Sakit" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Cuti Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_cuti" id="gridRadios2" value="Cuti Tahunan">
                            <label class="form-check-label" for="gridRadios2">
                                Cuti Tahunan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_cuti" id="gridRadios3" value="Cuti Melahirkan">
                            <label class="form-check-label" for="gridRadios3">
                                Cuti Melahirkan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_cuti" id="gridRadios4" value="Cuti Haid">
                            <label class="form-check-label" for="gridRadios4">
                                Cuti Haid
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_cuti" id="gridRadios5" value="Cuti Liburan">
                            <label class="form-check-label" for="gridRadios5">
                                Cuti Liburan
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="alasancuti" class="col-sm-2 col-form-label">Alasan Cuti</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="alasancuti" name="alasancuti"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mulaicuti" class="col-sm-2 col-form-label">Mulai Cuti</label>
                    <div class="col-sm-10">
                        <input type="date" id="mulaicuti" name="mulaicuti">
                        <span> s/d </span>
                        <input type="date" id="akhircuti" name="akhircuti">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lamacuti" class="col-sm-2 col-form-label">Lama Cuti</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lamacuti" name="lamacuti">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" id="simpan" name="simpan">Submit</button>
                    </div>
                </div>
				
            </form>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    
    <?php
    include '../../koneksi/koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['simpan'])) {
        $ke = mysqli_real_escape_string($conn, $_POST['ke']);
        $nip = mysqli_real_escape_string($conn, $_POST['nip']);
        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        $jenis_cuti = mysqli_real_escape_string($conn, $_POST['jenis_cuti']);
        $alasancuti = mysqli_real_escape_string($conn, $_POST['alasancuti']);
        $mulaicuti = mysqli_real_escape_string($conn, $_POST['mulaicuti']);
		$akhircuti = mysqli_real_escape_string($conn, $_POST['akhircuti']);
        $lamacuti = mysqli_real_escape_string($conn, $_POST['lamacuti']);

        // Validasi apakah NIP sudah ada
        $check_query = "SELECT * FROM data_pengajuancuti WHERE id_cuti='$ke'";
        $result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Pengajuan ini sudah ada!');</script>";
        } else {
            $query = "INSERT INTO data_pengajuancuti (id_cuti, nama_karyawan, nip, jenis_cuti, alasan_cuti, mulai_dari, sampai, lama_cuti, keterangan)
                      VALUES ('$ke','$nama', '$nip', '$jenis_cuti', '$alasancuti', '$mulaicuti', '$akhircuti', '$lamacuti', 'Telah terkirim')";
            if (mysqli_query($conn, $query)) {
                $status = "sudah terkirim"; // Mengatur status menjadi "sudah terkirim"
            echo "<script>alert('Data berhasil disimpan!'); window.location.href = '../riwayatcuti2/riwayatcuti2.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        }
    }
    ?>

    <script src="script.js"></script>
</body>
</html>
