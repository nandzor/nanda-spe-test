<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Soal.php";

// Class untuk run Testing.
class CobaTest extends TestCase
{
    public function testSoal1()
    {
        // pakai class yang mau kita test.
        $soal = new Soal();
        $TestNum1 = 153; 
        $TestNum2 = 111; 
        // assert equal, ekspektasi nya adalah :
        // argument kiri = output(hasil yang diharapkan), argument kanan = input;
        $this->assertEquals(true, $soal->soal_1($TestNum1)); //true
        $this->assertEquals(false, $soal->soal_1($TestNum2)); //false

    }

    public function testSoal2() {

         // pakai class yang mau kita test.
         $soal = new Soal();
         $TestNum1 = [2, 4, 0, 100, 4, 11, 2602, 36]; 
         $TestNum2 = [160, 3, 1719, 19, 11, 13, -21];
         $TestNum3 = [11, 13, 15, 19, 9, 13, -21]; 
         // assert equal, ekspektasi nya adalah :
         // argument kiri = output(hasil yang diharapkan), argument kanan = input;
         $this->assertEquals(11, $soal->soal_2($TestNum1)); //Should return: 11 (the only odd number)
         $this->assertEquals(160, $soal->soal_2($TestNum2)); //Should return: 160 (the only even number)
         $this->assertEquals(false, $soal->soal_2($TestNum3)); //Should return: false (all odd integer, no outlier)
       
    }

    public function testSoal3() {

        // pakai class yang mau kita test.
        $soal = new Soal();
        $TestArr = ['red', 'blue', 'yellow', 'black', 'grey']; 
        $TestHaystack = 'blue'; 
        // assert equal, ekspektasi nya adalah :
        // argument kiri = output(hasil yang diharapkan), argument kanan = input;
        $this->assertEquals('This function should return 1 as the index of the needle (blue)', $soal->soal_3($TestArr, $TestHaystack)); //This function should return 1 as the index of the needle (blue)
   }

   public function testSoal4() {

    // pakai class yang mau kita test.
    $soal = new Soal();
    $a_arr1 = [1,2,3,4,6,10]; 
    $a_arr2 = [1]; 
    $b_arr1 = [1,5,5,5,5,3]; 
    $b_arr2 = [5];
    // assert equal, ekspektasi nya adalah :
    // argument kiri = output(hasil yang diharapkan), argument kanan = input;
    $this->assertEquals([2,3,4,6,10], $soal->soal_4($a_arr1, $a_arr2)); //Should return [2,3,4,6,10] because 1 is present in the second list
    $this->assertEquals([1,3], $soal->soal_4($b_arr1, $b_arr2)); //Should return [1,3] because 5 is present in the second list
  
}
}
