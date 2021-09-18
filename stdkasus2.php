<?php 

// class mobil{

//     var $nama;
//     var $merk;
//     var $warna;
//     var $kecepatanMaksimal;
     
    
//     function nama(){
//         return $this->nama = "Mercedes Benz C100<br>";
//     }

//     function merk(){
//         return $this->merk = "Mercedes Benz<br>";
//     }
          
//     function warna(){
//         return $this->warna = "Silver<br>";
//     }

//     function kecepatan(){
//         return $this->kecepatanMaksimal = "300 km<br>";
//     }
// }

// $mobil = new mobil();
// echo $mobil->nama().$mobil->merk().$mobil->warna().$mobil->kecepatan();

// echo "<hr>";

class mobilAkuDanDia{

    var $nama;
    var $merk;
    var $warna;
    var $kecepatanMaksimal;
     
    
    function namaMobilAku(){
        return $this->nama = "BMW Series 8<br>";
    }

    function merkMobilAku(){
        return $this->merk = "BMW<br>";
    }
          
    function warnaMobilAku(){
        return $this->warna = "White<br>";
    }

    function kecepatanMobilAku(){
        return $this->kecepatanMaksimal = "350 km<br>";
    }

    function namaMobilDia(){
        return $this->nama = "alphard <br>";
    }

    function merkMobilDia(){
        return $this->merk = "Toyota<br>";
    }
        
    function warnaMobilDia(){
        return $this->warna = "Black<br>";
    }

    function kecepatanMobilDia(){
        return $this->kecepatanMaksimal = "250 km<br>";
    }
}

$mobilAku = new mobilAkuDanDia();
echo "<b>Mobil Aku</b>";
echo "<br>";
echo $mobilAku->namaMobilAku().
     $mobilAku->merkMobilAku().
     $mobilAku->warnaMobilAku().
     $mobilAku->kecepatanMobilAku();

echo "<hr>";

$mobilDia = new mobilAkuDanDia();
echo "<b>Mobil Dia</b>";
echo "<br>";
echo $mobilAku->namaMobilDia().
     $mobilAku->merkMobilDia().
     $mobilAku->warnaMobilDia().
     $mobilAku->kecepatanMobilDia();





    
?>