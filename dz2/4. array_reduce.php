

<?php


$name = ['Артём', 'Егор', 'Татьяна', 'Алексей', 'Сергей', 'Семён', 'Пётр', 'Андрей','Ёж'];


foreach ($name as $valueName) {
    echo $valueName . ' ';
}

$str = implode($name);


?><br><?php


$f = function ($carry, $item ) use ($str)
{
    $carry += (substr_count($item, 'Ё') + substr_count($item, 'ё')) / strlen($str);
    return $carry;
};

?><br>Частота, с которой встречается буква 'Ё' в именах - <?php

echo array_reduce($name, $f);

?>


