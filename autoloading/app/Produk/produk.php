<?php 

abstract class produk {
    protected $judul,
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
            
          abstract function getInfo();
          
}