<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengajuan Cuti Karyawan PT Jambi Sejahtera</title>
    <link rel="stylesheet" href="login/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
</head>
<body>
    <div class="input">
        <img src="login/logo-kota-jambi-removebg-preview.png" alt="Logo Jambi" class="logo">
        <h1>PT. JAMBI SEJAHTERA</h1>
        <h6>Pengajuan Cuti Karyawan</h6>
        <form action="" method="post">
            <div class="box-input">
                <input type="text" name="user" placeholder="Username" required>
            </div>
            <div class="box-input">
                <input type="password" name="pass" placeholder="Password" required>
            </div>
            <div class="input-group">
                <select name="level" class="custom-select" id="inputGroupSelect04" required>
                    <option value="" selected>- Pilih Akses -</option>
                    <option value="manager">Manager</option>
                    <option value="karyawan">Karyawan</option>
                </select>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-block mt-3">Login</button>
        </form>
    </div>

    <?php
    session_start();
    include "koneksi/koneksi.php";

    if (isset($_POST['login'])) {
        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $level = $_POST['level'];

        $table = ($level == 'manager') ? 'tb_manager' : 'data_karyawan';
        $redirect = ($level == 'manager') ? '_manager/index.html' : '_karyawan/index.html';

        $stmt = $conn->prepare("SELECT * FROM $table WHERE Username = ? AND Password = ?");
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        if ($data) {
            $_SESSION[$level] = $data['nip'];
            echo "<script>alert('Login Sukses'); window.location.href = '$redirect';</script>";
        } else {
            echo "<div class='alert alert-danger text-center mt-3'>Login Gagal: Periksa Kembali Username dan Password!</div>";
        }

        $stmt->close();
    }
    ?>
</body>
</html>
