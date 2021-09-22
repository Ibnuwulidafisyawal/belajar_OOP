<?php 

//belajar OOP PHP
echo "<h2>Project Produk </h2>";
echo "<hr>";

class produk {
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;
           

        public function __construct( $judul = "judul", $penulis= "penulis", $penerbit= "penerbit", $harga=0) { 

            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            
            }

            //dikarenakan property  nya private maka dibuat method getjudul dll agar bisa di akses di objek
            //ini dinamakan dengan getter oop

            //dan setjudul atau dll  untuk mengganti nama dari produk komik atau game dan bisa di set di objek 

            public function setJudul($judul) { 
                // set judul harus string
                if (!is_string($judul)) {
                    throw new Exception("Judul ini Harus String");
                }
                $this->judul=$judul;
            }
            public function getJudul() {
                return $this->judul;
            }

            public function setPenulis($penulis){
                $this->penulis= $penulis;
            }
            public function getPenulis(){
                return $this->penulis;
            }

            public function setPenerbit($penerbit){
                $this->penerbit= $penerbit;
            }
            public function getPenerbit(){
                return $this->penerbit;
            }

            public function setHarga($harga){
                $this->harga= $harga;
            }
            //get Harga untuk diskon 
            public function getHarga(){
                return $this->harga - ($this->harga * $this->diskon / 100);
            }
            //set diskon untuk produk 
            public function setDiskon( $diskon) {
                 $this->diskon = $diskon;
            }

            public function getDiskon(){
                return $this->diskon;
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
echo "Harga " ,"Diskon ", $produk1->getJudul() , $produk1->setDiskon(30);
echo $produk1->getHarga();
echo  "<br>";
echo "Harga " ,"Diskon ", $produk2->getJudul() , $produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

echo "ini setter untuk mengganti nama judul dari produk tanpa mengubah nama property dari produk ";
echo $produk1->setJudul("<b>Saya Maung</b>");


//getter untuk menampilkan property judul dari property private
echo $produk1->getJudul();


// $infoProduk1 = new cetakInfoProduk();
// echo $infoProduk1->cetak($produk1);
?>


