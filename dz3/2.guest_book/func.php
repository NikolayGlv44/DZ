<?php


function readList()
{
    return file(__DIR__ . '/data.txt.');
}


$list = readList();
//var_dump($list);


if ( !empty($_POST['coment'])) {
    $list[] =$_POST['coment'] . "\n" ;
    file_put_contents(__DIR__ . '/data.txt.', $list) ;
    header('Location: /dz3/2.guest_book/index.php ');
}
