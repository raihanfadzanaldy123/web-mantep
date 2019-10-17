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
<header>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="#"><font color="white" >Angsam</font></a>
        </nav>  
</header>

       <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-10">
                <div class="card ">
                    <div class="card-header" align="center"><h5><kbd>Data Diri</kbd></h5></div>
                         <div class="card-body">
                             <form action="proses.php?aksi=tambah" method="post">
                                 <div class="form-group">
                                      <label for="">Nama</label>
                                         <input type="text" name="nama" class="form-control" id="">
                                 </div>
                                      <div class="form-group">
                                         <label>Alamat</label>
                                         <textarea name="alamat" class="form-control" rows="5"></textarea>
                                      </div>

                                    <div class="form-group">
                                        <label>Tanggal lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control">
                                    </div>

                                      <div class="form-group">
                                        <label>Jenis Kelamin</label>&nbsp; &nbsp;
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="jenis_kelamin" value="Laki-laki" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="form-check form-check-inline custom-radio">
                                            <input class="custom-control-input" id="customRadioInline2" type="radio" name="jenis_kelamin"  value="Perempuan">
                                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                            <label>Agama</label>
                                            <select name="agama">
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="budhha">Budhha</option>
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


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>