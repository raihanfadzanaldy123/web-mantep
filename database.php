<?php
    class Database{
    // $host = untuk memberitau kita menggunakan server lokal yaitu localhost,
    // $user = username dari localhost
    // $pass = password untuk masuk ke localhost mysql kita, kosongkan jika tidak menggunakan password
    // $db = untuk memberi akses kita menggunakan database mana di server lokal kita (localhost)

    public $host = "localhost", $user = "root", $pass = "123", $db = "latihan";
    public $koneksi;
    public function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if ($this->koneksi) {
            // echo "berhasil";
        }
        else{
            return "Koneksi Database Gagal";
        }
    }
}
    class Diri extends Database{
        // menampilkan semua data
        public function index(){
            $datadiri = mysqli_query($this->koneksi,"select * from biodata");
        // var_dump($datadiri);
        return $datadiri;
        }

        //menambah data
        public function create($nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama, $umur){
            mysqli_query($this->koneksi,"insert into biodata values
            ('','$nama','$alamat','$tgl_lahir','$jenis_kelamin','$agama','$umur')");
        }

          // Menampilkan Data Berdasarkan ID
        public function show($id){
        $datadiri = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $datadiri;
        }

        // menampilkan data berdasarkan id
        public function edit($id){
        $datadiri = mysqli_query($this->koneksi, "select * from biodata where id='$id'");
        return $datadiri;
        }

        // mengupdate data berdasarkan id
        public function update($id, $nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama, $umur){
            mysqli_query($this->koneksi,"update biodata set nama='$nama',alamat='$alamat',tgl_lahir='$tgl_lahir'
            ,jenis_kelamin='$jenis_kelamin',agama='$agama',umur='$umur' where id='$id'");
        }

        // Menghapus data Bedasarkan id
        public function delete($id){
            mysqli_query($this->koneksi,"delete from biodata where id='$id'");
           
        }

    }
    // keneksi DB
    $db = new Database();
?>