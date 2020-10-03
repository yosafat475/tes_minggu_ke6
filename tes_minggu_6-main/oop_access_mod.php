<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */

class accesMod
{
    public $name;
    public $color;
    public $sped;

    public function setName($nama)
    {
        echo $nama;
    }

    public function coloyr($color){
        echo $color;
    }

    public static function sped(){
        echo "300 km\jam";
    }

}

$oop = new accesMod();
echo $oop->setName ='Yoazdi';
echo $oop->coloyr = 'Black';
accesMod::sped();

