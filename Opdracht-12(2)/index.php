<?php
    declare(strict_types=1);
    
    require_once 'music.php';

    require_once 'luisterlijst.php';

    $kees = new ListenList();

    $music1 = new Music (name: 'Bach', genre:'Klassiek', listen: 3);
    $music2 = new Music (name:'ABC', genre: 'House', listen: 2);

    $kees->addMusic($music1);
    $kees->addMusic($music2);
    
    echo $music1->getName()."<br><br>";
    echo $music2->getName()."<br><br>";
    
    var_dump($music1);
    var_dump($music2);
?>
