<?php 


interface buah {
    public static function cetak();
    public static function jenisBuah();
}


  class jeruk implements buah {
    public static function cetak(){
        echo "Ini jenis buah ";
        
    }

    public static function jenisBuah(){
        echo "Jeruk";
    }
}



class nanas implements buah {
    public static function cetak(){
        echo "Ini jenis buah ";
        
    }

    public static function jenisBuah(){
        echo "Nanas";
    }
}

echo jeruk::cetak();
echo jeruk::jenisBuah();
echo "<br>";
echo nanas::cetak();
echo nanas::jenisBuah();

?>