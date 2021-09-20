<?php 

echo "<h2>Project Produk </h2>";
echo "<hr>";
class produk {
    public $judul,
           $penulis,
           $penerbit;

    protected $diskon = 0,
              $harga;

        public function __construct( $judul = "judul", $penulis= "penulis", $penerbit= "penerbit", $harga=0) { 

            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            
            }

            //set diskon untuk produk 
            public function setDiskon( $diskon){
                 $this->diskon = $diskon;
            }
        
            //get harga produk
            public function getHarga(){
                return $this->harga - ($this->harga * $this->diskon / 100);
            }

         public function getLabel(){
            return "$this->penulis, $this->penerbit";
            
         }
         //get info produk untuk menampilkan dari class komik dan game
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

//extends adalah untuk memanggil class induk 
class komik extends produk{
    public $jmlhlmn;
    

        public function __construct($judul = "judul", $penulis= "penulis", $penerbit= "penerbit", $harga=0 , $jmlhlmn = 0){
            // parent untuk mengambil dari class produk 
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

$produk1 = new komik ("Titan ", "Agung ", "Sunan ",45000,100 ,"Komik ");
$produk2 = new game ("Resident Evil ", "Saya ", "Aku ",45000,50 ,"Game ");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo "<hr>";

//tampilkan diskon 
echo "Harga " ,"Diskon ", $produk1->judul , $produk1->setDiskon(50);
echo $produk1->getHarga();
echo  "<br>";
echo "Harga " ,"Diskon ", $produk2->judul , $produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<br>";
// $infoProduk1 = new cetakInfoProduk();
// echo $infoProduk1->cetak($produk1);
?>


