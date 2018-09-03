<?php

/**
 * Students list
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 14.07.2016
 */

define('GENDER_MALE', 'male');
define('GENDER_FEMALE', 'female');

$students = [
    'vakolyuk' => [
        'name' => 'Dmitro Vakolyuk',
        'age' => 32,
        'gender' => GENDER_MALE
    ],
    'homy' => [
        'name' => 'Homer Simpson',
        'age' => 40,
        'gender' => GENDER_MALE
    ],
    'marge' => [
        'name' => 'Marge Simpson',
        'age' => 35,
        'gender' => GENDER_FEMALE
    ]
];

/**
 * @param string $nickname
 * @return array|null
 */


function getStudentByName($group , $name){
    return  array_key_exists($name , $group) ? $group[$name]: null;
}


$getByNickName = function ($nickname) use ($students)
{
    return isset($students[$nickname]) ? $students[$nickname] : null;
};

$askedNickName = isset($argv[1]) ? $argv[1] : null;

$studentData = getStudentByName($students, $askedNickName);

if ($studentData) {
    echo "Name: {$studentData['name']}\r\nAge: {$studentData['age']}\r\nGender: {$studentData['gender']}";
} else {
    echo "Student '{$askedNickName}' was not found";
}
