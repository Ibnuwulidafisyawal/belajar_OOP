<?php 

//Belajar Abstract Class 
// Adalah 

abstract class Kendaraan {

     abstract public function Info();
   
}

class Bmw extends Kendaraan {
    public function Info()  {
  
        return "Bmw 435i";
    }
}

class Mercy extends Kendaraan {
    public function Info(){
        return "Mercydes Benz S-Class 300";
    }
}

$InfoBmw = new Bmw();
    echo $InfoBmw->Info();
echo "<br>";

$infoMercy = new Mercy();
    echo $infoMercy->info();

    echo "<hr>";



//Abstract class dengan property dan parameter

abstract class handphone{
    abstract public function getmerk($merkhandphone);
}

class samsung extends handphone{
    public $merkhandphone;

    public function getmerk($merkhandphone){
      return  $this->$merkhandphone = $merkhandphone;
    }
}

$handphone1 = new samsung();
echo $handphone1->getmerk("Samsung S21");
echo "<hr>";



// abstract class method reguler
abstract class Buah{
     public function getInfoFruit(){
        echo " Ini adalah buah".$this->fruitName;
    }
}

class apple extends Buah{
    public $fruitName = " Apple";

    public function getInfoApple(){
        return  $this->getInfoFruit();
        
    }
}

$apple = new apple();
$apple->getInfoApple();

?>