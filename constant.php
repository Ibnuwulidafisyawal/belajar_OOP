<?php 

// Ini Contoh Penggunaan Constant 
//define tidak bisa dipakai di class konsep OOP pada php
//const bisa digunakan di dalam class konsep OOP pada php

define('NAMA', 'Ibnu Wulida Fisyawal');
echo NAMA;
echo "<br>";

const UMUR = 15;
echo UMUR;
echo "<br>";
echo "<hr>";

//contoh const di dalam class 

class TestConst{
    const NAMA = 'Ibnu si ganteng kalem';
}
    
echo "<b>Penggunaan const pada class</b> ";
echo "<br>";
echo TestConst::NAMA;


?>