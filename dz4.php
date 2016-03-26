<?

echo '-----------------------Задание 1---------------------------<br>';
$s=1000;
$t=10;
function f1($a,$b){


    echo 'Скорость автомобиля (Км/ч) равна: ', $a/$b, 'км/ч <br>';
    echo 'Скорость автомобиля (м/c) равна: ', ($a/$b)/3,6 ,'м/c <br>';
}
f1($s, $t);

echo'<hr>';
echo '-----------------------Задание 2---------------------------<br>';
function f2($a, $b)
{
    $sum =0;
    for($i=$a; $i<=$b; $i=$i+3){
        $sum = $sum + $i;
    }
    echo $sum;
}
echo'сумма ариф прог равна: ';

f2(1,112);

echo'<hr>';
echo '-----------------------Задание 3---------------------------<br>';
$mas = [];

function f3($mas, $n){
    for($i=0; $i<$n; $i++) {

            if ($i % 2 == 0) $mas[] = 0; else $mas[] = 1;

    }
    echo '<pre>';
    print_r($mas);
    echo '<pre>';
}

f3($mass, 5);

echo'<hr>';
echo '-----------------------Задание 4---------------------------<br>';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dz4</title>
</head>
<body>
<form id="forma" method="post" class="my-form">
    <p>
        <label for="chislo1">Введите начальное значение: </label>
        <input type="text" name="chislo1" id="chislo1" placeholder="Введите начальное значение" value="<?=isset($_REQUEST['chislo1']) ? $_REQUEST['chislo1'] : ''?>" >
    </p>

    <p>
        <label for="chislo2">Введите конечное значение</label>
        <input type="text" name="chislo2" id="chislo2" placeholder="Введите начальное значение" value="<?=isset($_REQUEST['chislo2']) ? $_REQUEST['chislo2'] : ''?>" >
    </p>
    <p>
        <input type="submit" id="submit" name="submit" value="Посчитать" >
    </p>
</form>

<hr>
<?
if(isset($_REQUEST['submit'])){
    function f4($a, $b){
        $sum=0;
        for($i=$a; $i<=$b; $i++){
            $sum=$sum + $i;
        }
        return $sum;
    }
    $d = f4($_REQUEST['chislo1'], $_REQUEST['chislo2']);
    echo $d;

}
?>
<?
echo'<hr>';
echo '-----------------------Задание 5---------------------------<br>';
function f5($x, $y){
    if($x<=10 && $x>0 && $y<=10 && $y>0) echo 'Точка находится в 1 четверти ';
    elseif($x>=-10 && $x<0 && $y<=10 && $y>0) echo 'Точка находится в 4 четверти';
    elseif ($x<=10 && $x>0 && $y>=-10 && $y<0) echo 'Точка находится во 2 четверти';
    elseif($x>=-10 && $x<0 && $y>=-10 && $y<0) echo 'Точка находится в 3 четверти';

}
f5 (-2,4);
?>


</body>
</html>
