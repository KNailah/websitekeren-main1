<?php
// Include database connection
include '../../koneksi/koneksi.php';

// Check if 'id' is set in the URL
if (isset($_GET['id'])) {
    $nip = $_GET['id'];

    // SQL query to delete the employee data
    $query = "DELETE FROM data_karyawan WHERE nip = '$nip'";

    // Execute the query
    if ($conn->query($query) === TRUE) {
        // Redirect back to the data page after deletion
        header("Location: karyawan.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
} else {
    echo "ID not specified.";
}

// Close the database connection
$conn->close();
?>
