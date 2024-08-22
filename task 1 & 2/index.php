<!-- 
1. Given a number N. Print numbers from 1 to N in separate lines.
Input
Only one line containing a number N (1 ≤ N ≤ 103
).
Output
Print N lines according to the required above.
Example
Input
5
Output
1 2 3 4 5 -->

  <?php
// $number = 5 ;
// for($i = 0 ; $i <= 5 ; $i++){
//     echo $i . "<br />";
// }

// with function 


// function printNumbers($number) {
//     for ($i = 0; $i <= $number; $i++) {
//         echo $i . "<br />";
//     }
// }

// $number = 5;
// printNumbers($number);

?> 

<!-- *********************************************************** -->

<!-- 
2. Given a number N. Print all even numbers between 1 and N inclusive in separate lines.
Input
Only one line containing a number N (1 ≤ N ≤ 103
).
Output
Print the answer according to the required above. If there are no even numbers print -1.
Examples
Input
10
Output
2 4 6 8 10
Input
5
Output
2 4 -->
<?php
// $number = 10 ;
// $foundEven = false ;

// for($i = 2 ; $i <= $number ; $i += 2){
//     echo $i . "<br />";
//     $foundEven = true;
// }

// if (!$foundEven) {
//     echo "-1 <br />";
// }

// with function 

// function printEvenNumbers($number) {
//     $foundEven = false;

//     for ($i = 2; $i <= $number; $i += 2) {
//         echo $i . "<br />";
//         $foundEven = true;
//     }

//     if (!$foundEven) {
//         echo "-1 <br />";
//     }
// }

// $number = 10;
// printEvenNumbers($number);
?>
<!-- ************************************************** -->

<!-- 3. Given a number N, and N numbers, find maximum number in these N numbers.
Input
First line contains a number N (1 ≤ N ≤ 103
).
Second line contains N numbers Xi (0 ≤ Xi ≤ 109
).
Output
Print the maximum number.
Example
Input
5
1 8 5 7 5
Output
8
 -->
<?php
// $arr = [5,1,8,5,7,5];
// $max = $arr[0];

// for($i = 1; $i <= count($arr); $i++ ){
//     if ($arr[$i] > $max) {
//         $max = $arr[$i];
//     }
// }
// echo "The maximum number is :: " . $max; 

// with function 

// function findMax($arr) {
//     $max = $arr[0];

//     for ($i = 1; $i < count($arr); $i++) { 
//         if ($arr[$i] > $max) {
//             $max = $arr[$i];
//         }
//     }

//     return $max;
// }

// $arr = [5, 1, 8, 5, 7, 5]; 
// $max = findMax($arr);
// echo "The maximum number is :: " . $max;

 ?>

<!-- ************************************************************** -->
<!-- 4. Given a number X. Determine if the number is prime or not -->

<?php
// $number = 29;
// $isprime = true;

// if ($number <= 1) {
//     $isprime = false;
// }

// for($i = 2 ; $i <= sqrt($number) ; $i++){
//     if ($number % $i == 0) {
//         $isprime = false;
//         break;
//     }
// }

// if ($isprime) {
//     echo $number . " is a prime number.";
// } else {
//     echo $number . " is not a prime number.";
// }

// with function


// function isPrime($number) {
//     if ($number <= 1) {
//         return false;
//     }

//     for ($i = 2; $i <= sqrt($number); $i++) {
//         if ($number % $i == 0) {
//             return false;
//         }
//     }

//     return true;
// }

// $number = 29; // يمكنك تغيير الرقم لاختبار قيم أخرى

// if (isPrime($number)) {
//     echo $number . " is a prime number.";
// } else {
//     echo $number . " is not a prime number.";
// }


?>
<!-- ******************************************************************* -->
  <!-- 5. check the number is palindrome -->
 <?php
// $number = 121; // You can change this number to test with different values
// $originalNumber = $number;
// $reversedNumber = 0;

// while ($number > 0) {
//     $digit = $number % 10; // Get the last digit of the number
//     $reversedNumber = ($reversedNumber * 10) + $digit; // Build the reversed number
//     $number = (int)($number / 10); // Remove the last digit from the number
// }

// if ($originalNumber == $reversedNumber) {
//     echo $originalNumber . " is a palindrome.";
// } else {
//     echo $originalNumber . " is not a palindrome.";
// }

// with function


// function isPalindrome($number) {
//     $originalNumber = $number;
//     $reversedNumber = 0;

//     while ($number > 0) {
//         $digit = $number % 10;
//         $reversedNumber = ($reversedNumber * 10) + $digit;
//         $number = (int)($number / 10);
//     }

//     return $originalNumber == $reversedNumber;
// }

// $number = 121; 
// if (isPalindrome($number)) {
//     echo $number . " is a palindrome.";
// } else {
//     echo $number . " is not a palindrome.";
// }



?>
<!-- *************************************************************************** -->
<!-- 6 . print all the divisors of number in ascending order -->
<!-- <?php
// $number = 15; 

// for ($i = 1; $i <= $number; $i++) {
//     if ($number % $i == 0) {
//         echo $i . "<br>"; 
//     }
// }

// with function 

// function printDivisors($number) {
//     for ($i = 1; $i <= $number; $i++) {
//         if ($number % $i == 0) {
//             echo $i . "<br>";
//         }
//     }
// }

// $number = 15;
// printDivisors($number);


?> -->
<!-- ************************************************************************** -->
 <!-- 7. write php code :: print lucky number , The Lucky number is any positive number that its decimal representation contains only 4 and 7.
For example: numbers 4, 7, 47 and 744 are lucky and numbers 5, 17 and 174 are not. example Input
4 20
Output
4 7 
Input
8 15
Output
-1  -->
<?php


// $A = 4;
// $B = 20;

// $luckyNumbers = [];

// for ($i = $A; $i <= $B; $i++) {
//     $number = $i;
//     $isLucky = true; 
    
//     while ($number > 0) {
//         $digit = $number % 10; 
//         if ($digit != 4 && $digit != 7) {
//             $isLucky = false; 
//             break; 
//         }
//         $number = (int)($number / 10); 
//     }

    
//     if ($isLucky) {
//         $luckyNumbers[] = $i;
//     }
// }


// if (count($luckyNumbers) > 0) {
//     echo implode(" ", $luckyNumbers) . "\n"; 
// } else {
//     echo "-1\n"; 
// }


// with function 
// $A = 4;
// $B = 20;

// function isLuckyNumber($number) {
//     while ($number > 0) {
//         $digit = $number % 10; 
//         if ($digit != 4 && $digit != 7) {
//             return false; 
//         }
//         $number = (int)($number / 10); 
//     }
//     return true;
// }

// $luckyNumbers = [];

// for ($i = $A; $i <= $B; $i++) {
//     if (isLuckyNumber($i)) {
//         $luckyNumbers[] = $i;
//     }
// }

// if (count($luckyNumbers) > 0) {
//     echo implode(" ", $luckyNumbers) . "\n"; 
// } else {
//     echo "-1\n"; 
// }
?>
<!-- ***************************************************************** -->
 <!-- 8. Example
Input
4
Output
*
**
***
****
Note
Don't print any extra spaces after symbol " * " -->

<?php 
// $N = 4; 
// for ($i = 1; $i <= $N; $i++) {
    
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "<br>"; 
// }

// with function


// function printStars($N) {
//     for ($i = 1; $i <= $N; $i++) {
//         for ($j = 1; $j <= $i; $j++) {
//             echo "*";
//         }
//         echo "<br>";
//     }
// }

// $N = 4;
// printStars($N);


?>



