<?php 
include 'header.php';
include '../koneksi.php';

// Periksa apakah petugas sudah login
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

// Mendapatkan id petugas dari sesi
$petugas_id = $_SESSION['id'];
?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Laporan Unggah Arsip</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Laporan</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Laporan Unggah Arsip</h3>
        </div>
        <div class="panel-body">
        <form method="post" action="">
            <label for="filter">Filter berdasarkan:</label>
            <select name="filter" id="filter">
                <option value="all" <?php if(isset($_POST['filter']) && $_POST['filter'] == 'all') echo 'selected'; ?>>All Time</option>
                <option value="7" <?php if(isset($_POST['filter']) && $_POST['filter'] == '7') echo 'selected'; ?>>7 Hari</option>
                <option value="30" <?php if(isset($_POST['filter']) && $_POST['filter'] == '30') echo 'selected'; ?>>30 Hari</option>
                <option value="365" <?php if(isset($_POST['filter']) && $_POST['filter'] == '365') echo 'selected'; ?>>365 Hari</option>
            </select>
            <button type="submit">Terapkan</button>
        </form>
        <br>

            <div class="pull-right">
                <form method="post" action="export_laporan_petugas.php">
                    <input type="hidden" name="filter" value="<?php echo isset($_POST['filter']) ? $_POST['filter'] : 'all'; ?>">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Laporan</button>
                </form>
            </div>
            
            <br>
            <br>
            <br>
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="18%">Waktu Upload</th>
                        <th width="30%">Petugas</th>
                        <th width="30%">Nama File</th>
                    </tr>
                </thead>
                <tbody>
                <?php
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

                    // Periksa kesalahan query
                    if (!$result) {
                        echo 'Error: ' . mysqli_error($koneksi);
                        exit;
                    }

                    $no = 1;
                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $waktu_upload = date("Y-m-d H:i:s", strtotime($row['laporan_waktu']));
                            
                            echo '<tr>
                                    <td>' . $no . '</td>
                                    <td>' . $waktu_upload . '</td>
                                    <td>' . $row['petugas_nama'] . '</td>
                                    <td>' . $row['laporan_arsip'] . '</td>
                                </tr>';
                            $no++;
                        }
                    } else {
                        echo '<tr><td colspan="4">Tidak ada data yang ditemukan untuk kriteria yang dipilih.</td></tr>';
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
