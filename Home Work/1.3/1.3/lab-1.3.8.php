<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 05.07.18
 * Time: 14:48
 */



const OPERATION_SUM = '+';
const OPERATION_COMPARE = '?';

$operand_A = 10;
$operand_B = 10;
$operation_type = '+';

/**
 * функція додавання
 * @param $a
 * @param $b
 * @return mixed
 */


function sum($a, $b){
    return $a + $b;
}

/**
 * функція порівняння
 * @param $a
 * @param $b
 * @return int
 */
function compare($a, $b){
    if($a == $b) return 0;
    return ($a > $b) ? 1 : -1;
}

switch ($operation_type) {
    case '+':
        echo 'sum = ' . sum($operand_A, $operand_B);
        break;
    case '?':
        $result = compare($operand_A, $operand_B);
        if(!$result){
            echo 'оператори рівні';
        } elseif ($result == 1){
            echo 'A > B';
        } else {
            echo 'B < A';
        }
        break;
    default:
        echo 'Operation not found';
}




