<?php
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Koneksi ke database
include '../koneksi.php';
session_start();

// Periksa apakah petugas sudah login
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

// Mendapatkan id petugas dari sesi
$petugas_id = $_SESSION['id'];

// Buat spreadsheet baru
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Tambahkan header ke kolom
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Waktu Upload');
$sheet->setCellValue('C1', 'Petugas');
$sheet->setCellValue('D1', 'Nama File');

// Ambil data dari database
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
        // No additional where clause
        break;
}

$query = "
SELECT laporan.laporan_id, laporan.laporan_waktu, petugas.petugas_nama, laporan.laporan_arsip 
FROM laporan 
JOIN petugas ON laporan.laporan_petugas = petugas.petugas_id
$whereClause
ORDER BY laporan.laporan_waktu DESC";

$result = mysqli_query($koneksi, $query);

// Isi data ke dalam sheet
$rowNum = 2; // Mulai dari baris kedua setelah header
$no = 1;
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $sheet->setCellValue('A' . $rowNum, $no);
        $sheet->setCellValue('B' . $rowNum, $row['laporan_waktu']);
        $sheet->setCellValue('C' . $rowNum, $row['petugas_nama']);
        $sheet->setCellValue('D' . $rowNum, $row['laporan_arsip']);
        $rowNum++;
        $no++;
    }
} else {
    echo "Tidak ada data yang ditemukan untuk kriteria yang dipilih.";
    exit;
}

// Simpan spreadsheet ke file
$writer = new Xlsx($spreadsheet);
$filename = 'Laporan_Unggah_Arsip_Petugas.xlsx';
$writer->save($filename);

// Unduh file
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');
$writer->save('php://output');
exit;
