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
    <title>CRUD</title>
</head>
<body>
<!-- // header -->
<header>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="#"><font color="white" >Angsam</font></a>
        <a class="navbar-brand" href="#" align="right"><font color="white">Logout</font></a>
        </nav>  
</header>

<!-- // body -->


     <center>Biodata</center>    
    <a href="/biodatax/create.php">Input Biodata</a>
    <table class="table table-dark" border="1">
     <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal lahir</th>
            <th scope="col">Jenis kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Umur</th>
        </tr>
     </thead>
     <tbody>
    <?php
        $diri = new Diri();
        $no =1; 
        foreach ($diri->index() as $data) {      ?>
        <tr>
            <th scope="row"><?= $no++;       ?></th>
            <td><?= $data['nama'];           ?></td>
            <td><?= $data['alamat'];         ?></td>
            <td><?= $data['tgl_lahir'];      ?></td>
            <td><?= $data['jenis_kelamin'];  ?></td>
            <td><?= $data['agama'];          ?></td>
            <td><?= $data['umur'];           ?></td>
            <td></td>
            <td><a href="show.php?id=   <?= $data['id'];    ?> &aksi=show">Show</a></td>
            <td><a href="edit.php?id=   <?= $data['id'];    ?> &aksi=edit">Edit</a></td>
            <td><a href="proses.php?id= <?= $data['id'];    ?> &aksi=delete"
            oneclick="return confirm(" yakin akan menghapus data?");">Delete</a></td>

        </tr>
     </tbody>
        <?php }  ?>
    </table> 
</body>
</html>

