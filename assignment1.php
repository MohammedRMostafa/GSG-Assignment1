<?php

// =======================================================================
echo str_repeat('=', 52);
echo '<br>';


function checkSameChar($string)
{
    return ("Your String \"$string\" Is : " . (substr($string, 0, 2) == substr($string, -2) ? " " : ' Not ') . "Contain Same First Two Char And The Last");
}


echo checkSameChar('xsdss');

echo '<br>';


// =======================================================================
echo str_repeat('=', 52);
echo '<br>';

function checkStartWithGo($string)
{
    return ("Your String \"$string\" Is : " . (substr($string, 0, 2) == 'Go' ? " " : ' Not ') . "Start Whith 'Go'");
}

echo checkStartWithGo("Giogo");


echo '<br>';
// =======================================================================
echo str_repeat('=', 52);
echo '<br>';





function checkMultipleNumber($num)
{
    if ($num < 0)
        return "Your Number ($num) Is : Negative Number";
    return ("Your Number ($num) Is : " . (($num % 3 == 0 or $num % 7 == 0) ? " " : ' Not ') . "a multiple of 3 or a multiple of 7");
}

echo checkMultipleNumber(7);



echo '<br>';
// =======================================================================
echo str_repeat('=', 52);
echo '<br>';




function maxNumber($num1, $num2, $num3)
{
    if ($num1 > $num2 && $num1 > $num3) {
        return $num1;
    } elseif ($num2 > $num3 && $num2 > $num1) {
        return $num2;
    } else {
        return $num3;
    }
}

echo "The Max Number Is : (" . maxNumber(123, 111, 452) . ")";


echo '<br>';
// =======================================================================
echo str_repeat('=', 52);
echo '<br>';


function nearestTo100($num1, $num2)
{

    $sum1 = abs($num1 - 100);
    $sum2 = abs($num2 - 100);
    if ($sum1 == $sum2) {
        return 0;
    } else {
        return $sum1 < $sum2 ? $num1 : $num2;
    }
}

echo "The Nearest Number To The Number 100 Is : (" . nearestTo100(98, 218) . ")";



echo '<br>';
// =======================================================================
echo str_repeat('=', 52);
echo '<br>';



function maxNumberWithRange($num1, $num2)
{
    if ($num1 >= 20 && $num1 <= 30 && $num2 >= 20 && $num2 <= 30) {
        if ($num1 > $num2) {
            return $num1;
        }
        return $num2;
    } else {
        return 0;
    }
}

echo "The Max Number Is : (" . maxNumberWithRange(30, 29) . ")";


echo '<br>';
// =======================================================================
echo str_repeat('=', 52);
echo '<br>';



function countTheNumberOfOccurrences($string)
{
    $result = "";
    $count = [];
    for ($i = 0; $i < strlen($string); $i++) {
        if (array_key_exists($string[$i], $count)) {
            $count[$string[$i]] += 1;
        } else {
            $count += [$string[$i] => 1];
        }
    }
    $keys = array_keys($count);
    $values = array_values(($count));
    for ($i = 0; $i < count($count); $i++) {
        $result .= "'$keys[$i]' => $values[$i] <br>";
    }
    return $result;
}
echo countTheNumberOfOccurrences("adasddasfffzsarsr");


// =======================================================================
echo str_repeat('=', 52);
echo '<br>';



function sumDigits($num)
{
    $num = (string) $num;
    $result = 0;
    for ($i = 0; $i < strlen($num); $i++) {
        $result +=  $num[$i];
    }
    return $result;
}

echo "The sum of the digits of the number is " . sumDigits(1808510);



echo '<br>';
// =======================================================================
echo str_repeat('=', 52);
echo '<br>';



function reverseString($string)
{
    $result = "";
    for ($i = strlen($string) - 1; $i > -1; $i--) {
        $result .= $string[$i];
    }
    return $result;
}



echo "The reverse of sting is '" . reverseString('abced') . "'";

echo '<br>';
// =======================================================================
echo str_repeat('=', 52);
