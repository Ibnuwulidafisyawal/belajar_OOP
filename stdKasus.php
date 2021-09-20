<?php 
//studi casus no 1
class kucing{

    var $namaKucing;
    var $warna;
    var $jenis;
    var $activity;
     
    
    function namaKucing(){
        return $this->namaKucing = "alex<br>";
    }

    function warnaKucing(){
        return $this->warna = "hijau<br>";
    }
          
    function jenis(){
        return $this->jenis = "berkaki 4<br>";
    }

    function activity(){
        return $this->activity = "bermain<br>";
    }
}

$kucing = new kucing();
echo $kucing->namaKucing().$kucing->warnaKucing().$kucing->jenis().$kucing->activity();

echo "<hr>";

//studi casus no 2
class siswa{

    var $namaSiswa;
    var $nis;
    var $rombel;
    var $alamat;
     
    
    function namaSiswa(){
        return $this->namaSiswa = "Ucok<br>";
    }

    function nis(){
        return $this->nis = "11210001<br>";
    }
          
    function rombel(){
        return $this->rombel = "RPL X-7<br>";
    }

    function alamat(){
        return $this->alamat = "Bogor<br>";
    }
}

$siswa = new siswa();
echo $siswa->namaSiswa().$siswa->nis().$siswa->rombel().$siswa->alamat();

?>


