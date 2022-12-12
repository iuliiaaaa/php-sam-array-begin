<pre>
<?php
// 1.Создайте массив arrRandom и заполните его на 10 элементов случайными числами в промежутке [35; 42].
$arrRandom = [];
$len = 10;
$min = 35;
$max = 42;

for ($i = 0; $i < $len; $i++) {
    $arrRandom[] = rand($min, $max);
}
print_r($arrRandom);

//2.Выведите элементы этого массива в строку через «; ».
$res = implode('; ', $arrRandom);
print_r($res . "<br>");

//3.Оставьте в массиве только уникальные значения, определите их количество
$uniq = array_unique($arrRandom);
$count = count($uniq);
print_r($uniq);
print_r("их количество - " . $count . "<br>");
echo '<br>';

//4.Увеличьте каждый элемент массива в 3 раза
for ($i = 0; $i < count($arrRandom); $i++) {
    $multip[$i] = $arrRandom[$i] * 3;
}
print_r($multip);

//5.Создайте новый массив arrRange и заполните его числами в промежутке [-50; 50] с шагом = 8.
// Перемешайте элементы этого массива
$arrRange = range(-50, 50, 8);
shuffle($arrRange);
print_r($arrRange);

//6.Определите сумму положительных четных элементов массива arrRange
$res2 = array_filter($arrRange, fn ($a) => $a > 0 && $a % 2 == 0);
$sumRes = array_sum($res2);
print_r("сумма пол. чёт. = " . $sumRes . "<br>");

// 7.Определите произведение элементов массива arrRange, кратных 3 или 5
$multipArrRange = array_filter(
    $arrRange,
    function ($a) {
        if ($a % 3 == 0 && $a % 5 == 0) {
            return $a;
        }
    }
);
$arrProduct = array_product($multipArrRange);
print_r($multipArrRange);

//8.Объедините массивы arrRange и arrRandom двумя способами
$arrSpread = [...$arrRandom, ...$arrRange];
print_r($arrSpread);

$arrMerge = array_merge($arrRandom, $arrRange);
print_r($arrMerge);

//9.Выведите минимальные элементы массива, полученного в задании №8
sort($arrSpread);
$arrSplice = array_splice($arrMerge, 0, 5);
print_r(join('; ', $arrSplice));



//10.В массиве arrRandom вместо 5 и 6 элементов разместите элементы: 1000, 2000, 3000
array_splice($arrRandom, 5, 2, [1000, 2000, 3000]);
print_r($arrRandom);


//11.Имеется строка вида: «А роза упала на лапу Азора». Сформируйте массив, элементами которого станут слова этой строки
$newArr = 'А роза упала на лапу Азора';
$res3 = explode(' ', $newArr);
print_r($res3);

//12.Удалите последний элемент массива arrRandom
array_pop($arrRandom);

//14.	Имеется массив
$arr1 = [
    "white" => "белый",
    "yellow" => "желтый",
    "red" => "красный",
    "green" => "зеленый",
];
// Деструктурируйте массив двумя способами
["white" => $white, "yellow" => $yellow, "red" => $red, "green" => $green] = $arr1;
print_r("$white, $yellow, $red, $green" ."<br>");
print_r($arr1);

extract($arr1);

//15.Имеется массив. Выполните сортировку элементов массива по весу в порядке убывания.
// Результат отобразите на странице в виде таблицы

$arr = [
    [
        "berry" => "виноград",
        "color" => "зеленый",
        "weight" => 1.5
    ],
    [
        "berry" => "земляника",
        "color" => "красный",
        "weight" => 0.7
    ],
    [
        "berry" => "blueberry",
        "color" => "фиолетовый",
        "weight" => 0.3
    ],
];
uasort($arr, function ($a, $b) {
    if ($a['weight'] < $b['weight']) {
        return 1;
    }
    if ($a['weight'] == $b['weight']) {
        return 0;
    }
    if ($a['weight'] > $b['weight']) {
        return -1;
    }
});
print_r($arr);
?>
</pre>