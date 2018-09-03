<?php

/**
 * Employees finder
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 18.07.2016
 */

$employees = [
    [
        'name' => 'Clark Kent',
        'age' => 22,
        'skills' => ['PHP', 'Java', 'C#']
    ],
    [
        'name' => 'Steve Stifler',
        'age' => 21,
        'skills' => ['PHP', 'JS', 'CSS', 'HTML']
    ],
    [
        'name' => 'Bruce Wayne',
        'age' => 35,
        'skills' => ['PHP', 'PHP Unit', 'XDebug', 'JS']
    ],
    [
        'name' => 'Peter Parker',
        'age' => 18,
        'skills' => ['PHP', 'C', 'Pascal']
    ]
];

foreach ($employees as $employee) {
    if (false === in_array('PHP', $employee['skills']) || false === in_array('PHP Unit', $employee['skills'])) {
        continue;
    }

    echo "{$employee['name']} ({$employee['age']} years): " . implode(', ', $employee['skills']);
    break;
}
