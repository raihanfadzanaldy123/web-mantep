<?php
    include 'database.php';
    $diri = new Diri();

    $aksi = $_GET['aksi'];
    if (isset($_POST['save'])) {
        $id             = $_POST['id'];
        $nama           = $_POST['nama'];
        $alamat         = $_POST['alamat'];
        $tgl_lahir      = $_POST['tgl_lahir'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $agama          = $_POST['agama'];
        $ultah          = date('Y',strtotime($tgl_lahir));
        $umur           = date('Y') - $tgl_lahir;
    }

    if ($aksi == "tambah") {
        $diri->create($nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama, $umur);
            header("Location:index.php");
    }    
    elseif ($aksi == "update") {
        $diri->update($id, $nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama, $umur);
            header("Location:index.php");
        }
    elseif ($aksi == "delete") {
        $diri->delete($_GET['id']);
            header("Location:index.php");
        }
?>