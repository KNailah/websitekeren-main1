<?php
include "../../koneksi/koneksi.php";

// Mengambil parameter nip dari URL
$nip = $_GET['nip'];

// Periksa apakah id (nip) valid
if (isset($nip)) {
    // Query DELETE untuk menghapus data berdasarkan nip
    $query = "DELETE FROM data_karyawan WHERE nip = ?";

    // Menyiapkan prepared statement
    if ($stmt = mysqli_prepare($conn, $query)) {
        // Mengikat parameter nip ke prepared statement
        mysqli_stmt_bind_param($stmt, 's', $nip); // 's' untuk string (nip)

        // Menjalankan query
        if (mysqli_stmt_execute($stmt)) {
            // Redirect ke halaman karyawan setelah 1 detik
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/websitekeren-main/_manager/karyawan/karyawan.php'>";
        } else {
            echo "Gagal menghapus data. Silakan coba lagi.";
        }

        // Menutup prepared statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Gagal menyiapkan query.";
    }
} else {
    echo "NIP tidak ditemukan.";
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
