<?php 
    function test(){
       return "test"; 
    }
    
    $a = test();
    //echo $a;

    function collection($number1 = 2,$number2 = 10){
        return($number1 + $number2);
    }
    $total = collection(5,12);
    //echo $total;

    $name='Alper';
    
    function namesurname($surname){
        //$GLOBALS['name'] 
        global $name;
        return $name . ' ' . $surname;
    }

    //echo namesurname('Çatal');

    $write ="Alper Çatal ";

    //echo substr ($write, 0,10). '...';

    function shortenit($str,$limit = 10){
        $characternumber = strlen($str);
        if ($characternumber > $limit) {
            $str = substr($str, 0 , $limit) . '...';
        }
        return $str;
    }

    echo shortenit($write , 5);

?>