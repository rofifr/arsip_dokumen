<?php
include '../koneksi.php';
session_start();

// Periksa apakah petugas sudah login
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

// Mendapatkan id petugas dari sesi
$petugas_id = $_SESSION['id'];

$filter = isset($_POST['filter']) ? $_POST['filter'] : 'all';

$whereClause = "WHERE laporan.laporan_petugas = $petugas_id ";
switch ($filter) {
    case '7':
        $whereClause .= "AND laporan_waktu >= NOW() - INTERVAL 7 DAY";
        break;
    case '30':
        $whereClause .= "AND laporan_waktu >= NOW() - INTERVAL 30 DAY";
        break;
    case '365':
        $whereClause .= "AND laporan_waktu >= NOW() - INTERVAL 365 DAY";
        break;
    case 'all':
    default:
        // No additional where clause for "all time"
        break;
}

$query = "
SELECT laporan.laporan_id, laporan.laporan_waktu, petugas.petugas_nama, laporan.laporan_arsip 
FROM laporan 
JOIN petugas ON laporan.laporan_petugas = petugas.petugas_id
$whereClause
ORDER BY laporan.laporan_waktu DESC";
$result = mysqli_query($koneksi, $query);

// Mengatur header untuk output Excel
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Arsip_Petugas.xls");
header("Pragma: no-cache");
header("Expires: 0");

// Membuat header tabel
echo "No\tWaktu Upload\tNama Petugas\tJudul Arsip\n";

// Mengisi data tabel
$no = 1;
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $waktu_upload = date("Y-m-d H:i:s", strtotime($row['laporan_waktu']));
        
        echo $no . "\t" . $waktu_upload . "\t" . $row['petugas_nama'] . "\t" . $row['laporan_arsip'] . "\n";
        $no++;
    }
}

exit;
?>
