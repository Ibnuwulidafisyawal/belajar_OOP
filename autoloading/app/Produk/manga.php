<?php

class manga extends produk implements infoProduk{
    public $jmlhlmn;

    public function __construct($judul = "judul", $penulis= "penulis", $penerbit= "penerbit", $harga=0 , $jmlhlmn = 0){
        // parent untuk mengambil dari class produk 
        parent::__construct($judul, $penulis,$penerbit,$harga);
            $this->jmlhlmn = $jmlhlmn;
    }
    
    public function getInfoProduk(){     
        $str = "Manga : " . $this->getInfo() . " - {$this->jmlhlmn} Halaman.";

        return $str;
        
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getlabel()} (RP. {$this->harga})";
        return $str;
    }

} 