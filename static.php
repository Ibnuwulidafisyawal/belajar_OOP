<?php 

//static keyword adalah member yang terikat dengan class
//nilai static akan selalu tetap meskipun object di instansiasi berulang kali
//Fungsi nya adalah code menjadi lebih procedural
//biasanya digunakan untuk membuat  fungsi bantuan atau helper
//atau digunakan di class" utility pada framework


class contohStatic{
    public static $angka = 1;

    public function welcome(){
        return " Ini Static ke". self::$angka++ ."<br>";
    }

}

$obj1= new contohStatic();
echo $obj1->welcome();
echo $obj1->welcome();
echo $obj1->welcome();

echo "<hr>";

$obj2 = new contohStatic();
echo $obj2->welcome();
echo $obj2->welcome();
echo $obj2->welcome();
echo "<hr>";





//contoh static ke 2
class Mobil {
    public static $speed  = 200;

    public static function getDefaultspeed() {
        return self::$speed;
    }

    public static function getspeed(){
        return 400;
    }
}


echo Mobil::getspeed();
echo "<br>";
echo Mobil::$speed; 
echo "<br>";
echo Mobil::getDefaultspeed(); 


//jadi static memudahkan dan lebih hemat code

?>