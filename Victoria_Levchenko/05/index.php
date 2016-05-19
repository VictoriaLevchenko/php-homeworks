<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>lesson 5</title>
</head>
<body>
<!--task 1-->
<form method="post">
    <p>Введите значение n: <input type="text" name="n"/></p>
    <p><input type="submit"/></p>
</form>
<?php
if (!empty($_POST)) {
    $n = (int)$_POST['n'];
    $sum = 0;
    for ($i = 1; $i < $n; $i += 3) {
        $sum += $i;
    }

    echo "При n = $n, cумма чисел равна $sum <hr />";


//task 2
    echo "Квадраты чисел массива:";
    $arr = [];
    for ($i = 0; $i < $n; $i++) {
        $arr[] = pow($i, 2);
        echo "<br />" . $arr[$i];
    }
    echo "<hr />";


//task 3
    echo "Заполненный массив чисел длинной n, при n = $n <br />";

    $ar = [];
    for ($i = 0; $i < $n; $i++) {
        if ($i % 2 == 0) {
            $ar[] = 0;
        } else {
            $ar[] = 1;
        }
        echo $ar[$i] . "<br />";
    }
}
echo "<hr />";

//task 4

function checkArrayUnique($ar)
{
    $isUnique = true;
    for ($i = 0; $i < count($ar) - 1; $i++) {
        if ($isUnique == false) {
            break;
        }
        for ($j = $i + 1; $j < count($ar); $j++)
            if ($ar[$i] == $ar[$j]) {
                $isUnique = false;
                break;
            }

    }

    return $isUnique;
}

$array1 = [1, 2, 4, 4, 2, 5];
$array2 = [1, 2, 5, 7, 4];
$isArray1Unique = checkArrayUnique($array1);
$isArray2Unique = checkArrayUnique($array2);
if ($isArray1Unique == true) {
    echo "Массив array1 - уникальный.";
} else {
    echo "Массив array1 - не уникальный.";
}
if ($isArray2Unique == true) {
    echo "Массив array2 - уникальный.";
    } else {
    echo "Массив array2 - не уникальный.";
}


echo "<hr />";

//task 5

function ArrayUnique($ar)
{
    for ($i = 0; $i < count($ar) - 1; $i++) {
        for ($j = $i + 1; $j < count($ar); $j++)
            if ($ar[$i] == $ar[$j]) {
                unset($ar[$j]);
            }
    }
    return $ar;
}

print_r(ArrayUnique($array1));

echo "<hr />";

?>
</body>
</html>