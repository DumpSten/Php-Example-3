<?php
    $name = "Alper";
    $surname = "Çatal";
    $job = "Software Developer";
    $age = 20;

/* 
    Array describing
        1- array()
        2-[]    
        
*/

    $identity = array(
        'name'=> "Alper",
        'surname' => "Çatal",
        'job' => "Software Developer",
        'age' =>  20
    );

    $identity2 = [
        'name'=> "Alper",
        'surname' => "Çatal",
        'job' => "Software Developer",
        'age' =>  20
    ];

    $number = array(1,2,3);
    $number2 = [1,2,3];


    //echo $identity['age'];
    //print_r($identity);

$categories = [
    'sites' =>[
        'e-commerce'=>[
            'sahibinden',
            'n11',
            'hepsiburada',
            'amazon'
        ],
        'education'=>[
            'udemy',
            'prototurk',
            '93academy'
        ]
    ]
];

//echo $categories['sites']['e-commerce'][3];

define('member',[
    'name'=> "Alper",
    'surname' => "Çatal",
    'job' => "Software Developer",
    'age' =>  20
]);

echo member['job'];
?>