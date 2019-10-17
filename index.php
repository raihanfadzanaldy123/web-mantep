<?php
include 'database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

    <title>CRUD</title>
</head>
<body>
<!-- // header -->
<header>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="#"><font color="white" >Angsam</font></a>
        </nav>  
</header>

<!-- // body -->


     <div class="card-header" align="center" ><a>BIODATAX</a></div>   
    <a href="/biodatax/create.php"><h5><kbd>INPUTKAN DATA LAGI</kbd></h5></a><br>


    <table class="table table-dark" border="1" id = "ang">
     <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal lahir</th>
            <th scope="col">Jenis kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Umur</th>
            <th scope="col" style="text-align : center;">Aksi</th>
        </tr>
     </thead>
     <tbody>
    <?php
        $diri = new Diri();
        $no =1; 
        foreach ($diri->index() as $data) {      ?>
        <tr>
            <td scope="row"><?= $no++;       ?></td>
            <td><?= $data['nama'];           ?></td>
            <td><?= $data['alamat'];         ?></td>
            <td><?= $data['tgl_lahir'];      ?></td>
            <td><?= $data['jenis_kelamin'];  ?></td>
            <td><?= $data['agama'];          ?></td>
            <td><?= $data['umur'];           ?></td>
            
            <td><a href="show.php?id=   <?= $data['id'];    ?> &aksi=show" class=" btn btn-outline-primary ">Show</a>
            <a href="edit.php?id=       <?= $data['id'];    ?> &aksi=edit" class=" btn btn-outline-info ">Edit</a>
            <a href="proses.php?id=     <?= $data['id'];    ?> &aksi=delete"oneclick="return confirm(" yakin akan menghapus data?");" class=" btn btn-outline-danger ">Delete</a></td>

        </tr>
     
        <?php }  ?>
    </tbody>
    </table> 
 </div>

    
</body>
    <script src="assets/js/jquery"></script>
    <script  src="assets/js/jquery.min.js"></script>
    <script  src="assets/js/bootstrap.bundle.js"></script>
    <script  src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

    <script>$(document).ready(function() {
        $('#ang').DataTable();  
    } );</script>
</html>

