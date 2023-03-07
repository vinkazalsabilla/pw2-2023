<?php 

    /*
        Variable sistem
        Variable built in PHP (variable yang sudah ada di php)
    */
    echo $_SERVER["DOCUMENT_ROOT"];

    echo '<br><br>';

    /*
        Variable User
        Variable yang dibuat oleh user
    */
    $name = 'Rul';
    $age = 15;
    $weight = 50.5;

    $name = 'Akmal';
    
    echo 'Nama saya adalah' . $name;


    /* 
        Variable konstan
        Variable yang tidak bisa diubah nilainya
        1. menggunkan define | define
        ('fruit', "apel)
        2. menggunakan cost | cost fruit " apel";
    */
    echo '<br><br>';

    define("SITE_NAME","ELENA")
    echo SITE_NAME;
?>