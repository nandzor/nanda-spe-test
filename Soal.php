<?php
// File : Soal.php
class Soal
{
    // A narcissistic number is a number which return the sum of its own digits, each raised to the
    // power of the number of digits in a given base. (Assume there won’t be any decimal)
    // Translation :
    // Angka Narsis adalah sebuah angka hasil dari penjumlahan dari tiap digitnya masing-masing di
    // kuadratkan dengan jumlah digit yang diberikan.
    // Example 1 :
    // 1634 = 4 Digits
    // 1^4 + 6^4 + 3^4 + 4^4 = 1 + 1296 + 81 + 256 = 1634
    // Example 2 :
    // 153 = 3 Digits
    // 1^3 + 5^3 + 3^3 = 3 + 125 + 27 = 153
    // NARCISSISTIC NUMBER
    public function soal_1($num)
    {
        $array   = str_split($num);
        $nlenght = count($array);
        $sum = 0;
        
        foreach($array as $n){
            $sum += pow((int)$n, $nlenght);
        }	
        return $sum==$num;
    }

    // Given an array of integers (minimum length of 3), the array is either entirely contains whole of
    // odd integers with 1 outlier even integer or whole of even integers with 1 outiler odd integer.
    // The Challenge :
    // Write a method that takes an array as an argument and returns the outlier.
    // Example :
    // [2, 4, 0, 100, 4, 11, 2602, 36]
    // Should return: 11 (the only odd number)
    // [160, 3, 1719, 19, 11, 13, -21]
    // Should return: 160 (the only even number)
    // [11, 13, 15, 19, 9, 13, -21]
    // Should return: false (all odd integer, no outlier)
    // Parity Outlier
    public function soal_2($num_arr)
    {
        $odds = [];
        $evens = [];
        foreach ($num_arr as $item) {
            if ($item % 2) array_push($odds, $item);
            else array_push($evens, $item);
        }
        if(count($odds)>0 && count($evens)>0) {
            return count($evens) === 1 ? $evens[0] : $odds[0];
        } else {
            return false;
        }
        
    }

    // Write a function which takes 2 arguments the first one takes an array of string (as a haystack)
    // and the second one is single string (as the needle). This function should return the index of
    // needle’s position.
    // Rules :
    // Using array_search() function in PHP is prohibited
    // Example :
    // findNeedle([“red”, “blue”, “yellow”, “black”, “grey”], “blue”)
    // This function should return 1 as the index of the needle (blue)
    // NEEDLE IN THE HAYSTACK
    public function soal_3($arr, $haystack)
    {
        foreach ($arr as $key => $val) {
            if ($val === $haystack) {
                return "This function should return 1 as the index of the needle (".$val.")";
            }
        }
        return false;
    }

    // Blue Ocean Strategy is very famous in marketing strategy, it try the business to differ from
    // other competitor with new product / business model. In this case we’ll try the reverse of it!
    // The Challenge :
    // Create a function which takes 2 arguments and both should be array of integers. This function
    // should substracts one list to another and returns the result. It should remove all values from
    // the first list which are present in the second list.
    // Example 1 :
    // blueOcean([1,2,3,4,6,10], [1])
    // Should return [2,3,4,6,10] because 1 is present in the second list
    // Example 2 :
    // blueOcean([1,5,5,5,5,3], [5])
    // Should return [1,3] because 5 is present in the second list
    // THE BLUE OCEAN REVERSE
    public function soal_4($arr1, $arr2)
    {
        return !empty(array_intersect($arr1, $arr2));
    }
}
?>