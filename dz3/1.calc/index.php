<?php

require __DIR__ . '/func.calc.php';

if (isset($_POST['x'])) {
    $x = $_POST['x'];
} else {
    $x = 0;
}if (isset($_POST['y'])) {
    $y = $_POST['y'];
} else {
    $y = 0;
}
if (isset($_POST['op'])) {
    $op = $_POST['op'];
} else {
    $op = 0;
}


$res = calculate($x, $y, $op);

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
</head>
<body>
    <form action="/dz3/1.calc/index.php" method="post">
        <input type="number" name="x" value="<?php echo $x; ?>">
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="y" value="<?php echo $y; ?>">
        <input type="submit" value="=">
        <?php echo $res; ?>

    </form>

</body>
</html>