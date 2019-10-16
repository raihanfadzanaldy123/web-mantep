<?php
include 'database.php';
$diri = new Diri();
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
    <?php
        foreach ($diri->edit($_GET['id']) as $data) {
            $id             = $data['id'];
            $nama           = $data['nama'];
            $alamat         = $data['alamat'];
            $tgl_lahir      = $data['tgl_lahir'];
            $jenis_kelamin  = $data['jenis_kelamin'];
            $agama          = $data['agama'];
        }
    ?>

        <header>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="#"><font color="white" >Angsam</font></a>
        <a class="navbar-brand" href="#" align="right"><font color="white">Logout</font></a>
        </nav>  
        </header>

    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-10">
                <div class="card ">
                    <div class="card-header" align="center" >Data Diri</div>
                         <div class="card-body">
                             <form action="proses.php?aksi=update" method="post">
                             <input type="hidden" name="id" value="<?= $id; ?>">
                                 <div class="form-group">
                                      <label for="">Nama</label>
                                         <input type="text" name="nama" class="form-control" id="" value="<?= $nama; ?>">
                                 </div>
                                      <div class="form-group">
                                         <label>Alamat</label>
                                         <textarea name="alamat" class="form-control" rows="5" value="<?= $alamat; ?>"></textarea>
                                      </div>

                                    <div class="form-group">
                                        <label>Tanggal lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control" value="<?= $tgl_lahir; ?>">
                                    </div>

                                      <div class="form-group">
                                        <label>Jenis Kelamin</label>&nbsp; &nbsp;
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="jenis_kelamin" 
                                            value="Laki-laki" class="custom-control-input" 
                                            <?php if (isset($jenis_kelamin) && $jenis_kelamin=="Laki-laki") echo "Skuyy";?>>
                                            <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="form-check form-check-inline custom-radio">
                                            <input class="custom-control-input" id="customRadioInline2" type="radio" name="jenis_kelamin" 
                                            <?php if (isset($jenis_kelamin) && $jenis_kelamin=="Perempuan") echo "ngabss";?> value="Perempuan">
                                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                            <label>Agama</label>
                                            <select name="agama">
                                                <option value="<?= $agama; ?>">Islam</option>
                                                <option value="<?= $agama; ?>">Kristen</option>
                                                <option value="<?= $agama; ?>">Hindu</option>
                                                <option value="<?= $agama; ?>">Budhha</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Simpan" name ="save" class=" btn btn-info btn-block">
                                  </div>
                            </form>
                      </div>
                  </div>
               </div>      
            </div>
        </div>
    </div>

    <!-- <fieldset>
        <legend>Edit Data diri</legend>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <table>
                <<tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" value="<?= $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="text" name="alamat" value="<?= $alamat; ?>" cols="40" required></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tgl_lahir" value="<?= $tgl_lahir; ?>" required></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="jenis_kelamin"
                    <?php if (isset($jenis_kelamin) && $jenis_kelamin=="Laki-laki") echo "Skuyy";?>
                    value="Laki-laki">Laki-laki
                    <input type="radio" name="jenis_kelamin"
                    <?php if (isset($jenis_kelamin) && $jenis_kelamin=="Perempuan") echo "ngabss";?>
                    value="Perempuan">Perempuan</td>
                </tr>
                <tr>
                    <th>Agama</th>
                <td><select name="agama">
                    <option value="<?= $agama; ?>">ISLAM</option>
                    <option value="<?= $agama; ?>">KRISTEN</option>
                    <option value="<?= $agama; ?>">HINDU</option>
                    <option value="<?= $agama; ?>">BUDHHA</option>
                    </select> </td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset> -->

        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>