<?php
    $a = "ini adalah string";       //ini merupakan tipe data string
    $b = 10;                        //ini merupakan tipe data integer
    $c = 10.2;                      //ini merupakan tipe data float / double
    $d = false;                     //ini merupakan tipe data boolean
    $e = [                          //ini merupakan tipe data array
            'satu',
             12, 
             false 
        ];

    $f = NULL;                      //ini merupakan tipe data null

    // cara mengecek sebuah variable dapat menggunakan fungsi var_dumm
    
    echo var_dump($a);
    echo var_dump($b);
    echo var_dump($c);
    echo var_dump($d);
    echo var_dump($e);
    echo var_dump($f);
?>