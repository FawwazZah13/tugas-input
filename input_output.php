<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">Nama</label>
    <input type="text" name="txNama" id="" &emsp><br>
    <label for="">Umur</label>
    <input type="text" name="txUmur" id=""><br>
    <label for="">Alamat</label>
    <input type="text" name="txAlamat" id="">
    <input type="submit" value="simpan" name="btSimpan">
    </form>
</body>
</html>

<?php

    class Biodata {
        public $nama;
        public $umur;
        public $alamat;

        public function setNama($nama){
            $this->nama = $nama;
            if ($this->nama){
            return $nama;
            }else {
                return "Nama anda belum di isi!";
            }
        }
        public function setUmur($umur){
            $this->umur = $umur;
            if ($this->umur){
            return $umur;
            }else {
                return "Umur anda belum di isi!";
            }
        }
        public function setalamat($alamat){
            $this->alamat = $alamat;
            if ($this->alamat){
            return $alamat;
            }else {
                return "Alamat anda belum di isi!";
            }
        }
    }

    $biodata = new Biodata;
    if(isset($_POST['btSimpan'])) {
        echo  $biodata->setNama($_POST['txNama']);
        echo "<br>";
        echo  $biodata->setUmur($_POST['txUmur']);
        echo "<br>";
        echo $biodata->setAlamat($_POST['txAlamat']);
    }
    //UNTUK MENGETAHUI TOMBOL SUDAH DI KLIK ATAU BELUM
?>