<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>&&</h1>
<?php

$a = 0;
$b = 1;

?>

<table border="1">
    <caption>Таблица истинности - И</caption>
    <tr>
        <th><?php echo '&&' ?></th>
        <th><?php echo $a ?></th>
        <th><?php echo $b ?></th>
    </tr>
    <tr>
        <th><?php echo $a ?></th>
        <td><?php echo (int)($a & $a) ?></td>
        <td><?php echo (int)($b & $a) ?></td>
    </tr>
    <tr>
        <th><?php echo $b ?></th>
        <td><?php echo (int)($a & $b) ?></td>
        <td><?php echo (int)($b & $b) ?></td>
    </tr>
</table>
</br>
<table border="1">
    <caption>Таблица истинности - ИЛИ</caption>
    <tr>
        <th><?php echo '||' ?></th>
        <th><?php echo $a ?></th>
        <th><?php echo $b ?></th>
    </tr>
    <tr>
        <th><?php echo $a ?></th>
        <td><?php echo (int)($a || $a) ?></td>
        <td><?php echo (int)($b || $a) ?></td>
    </tr>
    <tr>
        <th><?php echo $b ?></th>
        <td><?php echo (int)($a || $b) ?></td>
        <td><?php echo (int)($b || $b) ?></td>
    </tr>
</table>
</br>
<table border="1">
    <caption>Таблица истинности - XOR</caption>
    <tr>
        <th><?php echo 'xor' ?></th>
        <th><?php echo $a ?></th>
        <th><?php echo $b ?></th>
    </tr>
    <tr>
        <th><?php echo $a ?></th>
        <td><?php echo (int)($a xor $a) ?></td>
        <td><?php echo $b xor $a ?></td>
    </tr>
    <tr>
        <th><?php echo $b ?></th>
        <td><?php echo $a xor $b ?></td>
        <td><?php echo (int)($b xor $b) ?></td>
    </tr>
</table>

<?php

$a = 1;
$b = 4;
$c = 2;


function discr($a, $b, $c)
{
    $d = ($b*$b)-(4*($a*$c));

    return $d;
}

$v = discr($a,$b,$c);
echo ($b*$b)-(4*($a*$c));

var_dump($v);

assert(108 == discr(2,-18,27));
assert(2500 == discr(1,-70,600));

if (0>$v){
    echo 'уравнение не имеет действительных корней';
}
else{
    $x1 = (-$b+sqrt($v))/(2*$a);
    $x2 = (-$b-sqrt($v))/(2*$a);
    echo 'x1 = ' . $x1 . '</br>';
    echo 'x2 = ' . $x2 . '</br>';
}

?>

<?php



    function imagy($name)
    {

        $lastchar = substr($name,-2,2);

        if($name==''){
            return 'имя не может быть пустым';
        }
        elseif($lastchar=='а'||$lastchar=='я'){
            return 'woman';
        }
        elseif ($lastchar=='й'||$lastchar=='в'||$lastchar=='р'||$lastchar=='м'){
            return 'man';
    }

    }

assert('man' == imagy('Василий'));






?>



</body>
</html>