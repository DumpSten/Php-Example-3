<?php 
    for ($i=0; $i <= 10 ; $i++) { 
        echo $i .'<br>';
    }

    for ($i=10; $i >=0 ; $i--) { 
        echo $i .'<br>';
    }
    $arr = [
        'udmey',
        'prototurk',
        '93academy',
        'alpercatal.net'
    ];
    for ($i=0; $i <=3 ; $i++) { 
        echo $arr[$i].'<br>';
    }
    for ($i=1; $i <= 10 ; $i++) { 
        if($i == 3) continue;
        echo $i .'<br>';
        if ($i == 6) break;
    }
?>