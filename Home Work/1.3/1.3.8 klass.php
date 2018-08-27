<?php

/**
 * Hello message print
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 12.07.2016
 */

const OPERATION_SUM = '+';
const OPERATION_COMPARE = '?';

$operand_A = 50;
$operand_B = 10;
$operation_type = '?';


function sum($a, $b){
    return $a + $b;

}
function compare($a, $b){
    if ($a == $b) return 0;
    return ($a > $b) ? 1 : -1;
}
switch ($operation_type){
    case '+':
        $result = sum($operand_A, $operand_B);
        echo  'sum = ' . $result;
        break;
    case '?':
        $result = compare($operand_A, $operand_B);
        if (!$result){
            echo 'оператори рівнв';
        } elseif ($result == 1){
            echo 'A > B';
        }else {
            echo 'B > A';
        }
        break;
    default:
        echo 'Operator not found';
}
;
