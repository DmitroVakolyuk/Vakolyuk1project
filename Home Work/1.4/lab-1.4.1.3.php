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

$languages = [
    'PHP',
    'PYTHON',
    'JAVA',
    'C#',
];

/**
 * @param string $nickname
 * @return array|null
 */
$students['vakolyuk']['lessons']=$languages[1];
$studentData = $students['vakolyuk'];
echo sprintf(
    "Name: %s\r\nAge: %s\r\nGender: %s\r\nLessons: %s",
    $studentData['name'],
    $studentData['age'],
    $studentData['gender'],
    implode(', ', $students['lessons'])
);
