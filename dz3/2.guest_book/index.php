<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Гостевая книга</h1>

    <?php

    require __DIR__ . '/func.php';

    foreach ( $list as $ls) { ?>
        <article style="border: 1px dotted black; margin: 10px;">
            <?php echo $ls; ?>
        </article>
    <?php } ?>

    <br>

    <form action="/dz3/2.guest_book/func.php" method="post">
        Комментарий: <input type="text" name="coment">
        <button type="submit">Отправить</button>
    </form>




</body>
</html>