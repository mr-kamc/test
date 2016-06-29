<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>calculator</h1>
<form action="index.php" method="get">
    <input type="text" name="prim">
    <select name="sign">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="text" name="sec">
    <input type="submit" value="=">
</form>
<?php

if(''==$_GET['prim']){
    echo 'введите первое число </br>';
}
elseif (is_numeric($_GET['prim'])){
    $prim = $_GET['prim'];
} else {
    echo 'первое значение не является числом </br>';
}
if(''==$_GET['sec']){
    echo 'введите второе число </br>';
}
elseif (is_numeric($_GET['sec'])){
    $sec = $_GET['sec'];
} else {
    echo 'второе значение не является числом </br>';
}

$sign = $_GET['sign'];

//определяем знак в переменной $res

switch ($sign) {
    case '+':
        $res = $prim + $sec;
        break;
    case '-':
        $res = $prim - $sec;
        break;
    case '/':
        $res = $prim / $sec;
        break;
    case '*':
        $res = $prim * $sec;
        break;
    default:
        $res = 0;
        break;
}
echo $res . '</br>';


?>

<a href="gallery.php">галлерея</a>


</body>
</html>