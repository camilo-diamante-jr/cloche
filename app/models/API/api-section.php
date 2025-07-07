<?php

// Teachers array
$teachers = [
    [
        'teacherID' => 1,
        'teacherName' => "Ma. Louisa J. Cruz",
        'teacherPosition' => "Teacher I",
        'teacherAge' => 34,
    ],
    [
        'teacherID' => 2,
        'teacherName' => "Juan Dela Cruz",
        'teacherPosition' => "Teacher II",
        'teacherAge' => 40,
    ],
    [
        'teacherID' => 3,
        'teacherName' => "Ana Reyes",
        'teacherPosition' => "Teacher I",
        'teacherAge' => 29,
    ],
];


$sections = [
    [
        "sectionID" => 1,
        "sectionName" => "Camia",
        "sectionAdviser" => 1,
    ],
    [
        "sectionID" => 2,
        "sectionName" => "Rosal",
        "sectionAdviser" => 2,
    ],
    [
        "sectionID" => 3,
        "sectionName" => "Sampaguita",
        "sectionAdviser" => 1,
    ],
    [
        "sectionID" => 4,
        "sectionName" => "Daisy",
        "sectionAdviser" => 3,
    ],
    [
        "sectionID" => 5,
        "sectionName" => "Ilang-ilang",
        "sectionAdviser" => 1,
    ],
];


foreach ($sections as &$section) {
    foreach ($teachers as $teacher) {
        if ($section['sectionAdviser'] == $teacher['teacherID']) {
            $section['teacherName'] = $teacher['teacherName'];
            break;
        }
    }
}
