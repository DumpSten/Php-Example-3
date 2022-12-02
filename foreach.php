<?php
    $numbers=[1,2,3,4,5,6,7,8,9,10];

    foreach ($numbers as $number ) {
        echo $number .'<br>';
    }

    $memberdetails=[
        'name' => 'Alper',
        'surname' => 'Çatal',
        'age' => '20',

    ];

    foreach ($memberdetails as $deatils => $val) {
        echo $deatils . ':' . $val . '<br>';
    }
?>