<?php

class cetakInfoProduk{

    public  $daftarProduk = array();

    public function tambahProduk(produk $produk)   {
        $this->daftarProduk[] = $produk;
        // $str = "{$produk->judul} | {$produk->getLabel()} |  RP. $produk->harga ";
  
    }

    public function cetak()    {
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }

}