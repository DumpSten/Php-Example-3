<?php

    function test(){
        return  'test';
    }

    //echo test();

    $test = function($par){
        return 'test' . $par;
    };

    //echo $test('Alper');

    $arr = [
        function(){
            return '1.function';
        },
        function(){
            return '2.function';
        },
        function(){
            return '3.function';
        }
    ];

    //echo $arr[rand(0,2)]();
    $surname = 'Çatal';

    function filter($name)
    {
        global $surname;
        return $name. ' ' .$surname;
    }


    $arr = ['Alper','Ahmet','ali','Sultan'];
    $arr = array_map(function($name) use($surname){
        return $name .' '. $surname;
    }, $arr);

    print_r($arr);
?>