<?php 


class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

        public function __construct( $judul = "judul", $penulis= "penulis", $penerbit= "penerbit", $harga=0) { 

            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            
            }

         public function getLabel(){
            return "$this->penulis, $this->penerbit";
            
         }
         public  function getInfoProduk()
         {
            $str = "{$this->judul} | {$this->getlabel()} (RP. {$this->harga})";
            // if ($this->tipe == "Komik") {
            //    $str .= " - {$this->jmlhlmn} Halaman.";
            // }else if($this->tipe == "Game"){
            //     $str .= " - {$this->jam} Jam.";
            // }
            return $str;
         }
}

class komik extends produk{
    public $jmlhlmn;
    

        public function __construct($judul = "judul", $penulis= "penulis", $penerbit= "penerbit", $harga=0 , $jmlhlmn = 0){

            parent::__construct($judul, $penulis,$penerbit,$harga);
                $this->jmlhlmn = $jmlhlmn;
        }

        public function getInfoProduk(){     
            $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlhlmn} Halaman.";

            return $str;
            
        }
}

class game extends produk{
    public $jam;

    public function __construct($judul = "judul", $penulis= "penulis", $penerbit= "penerbit", $harga=0 , $jam = 0){

        parent::__construct($judul,$penulis,$penerbit,$harga,$jam);
            $this->jam = $jam;
    }
        
        public function getInfoProduk() {
            $str = "Game : " . parent::getInfoProduk() . " - {$this->jam} Jam.";
                
                return $str;
            } 
        }

class cetakInfoProduk{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} |  RP. $produk->harga ";
        return $str;
    }
}

$produk1 = new komik ("Titan", "Agung", "Sunan",45000,100,"Komik");
$produk2 = new game ("Resident Evil", "Saya", "Aku",45000,50,"Game");


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";

// $infoProduk1 = new cetakInfoProduk();
// echo $infoProduk1->cetak($produk1);


?>


