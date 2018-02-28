<?php
require __DIR__ . '/func.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фотогалерея</title>


</head>
<body>
<?php
$list = namesList(__DIR__ . '/images');




foreach ($list as $image) { ?>

    <img src="/dz3/3.gal_photo/images/<?php echo $image; ?>" style="width:200px; border: 2px solid black">


<?php } ?>

<form action="/dz3/3.gal_photo/index.php" method="post" enctype="multipart/form-data">
    Выберите файл: <input type="file" name="picture"><br>
    <button type="submit">Загрузить файл</button>
</form>
</body>
</html>