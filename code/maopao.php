<?php

//冒泡排序
function r($arr, $rank = 'desc')
{
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j  < $n - 1; $j ++) {
            list($big, $small) = $arr[$j] > $arr[$j + 1] ? [$arr[$j], $arr[$j + 1]] : [$arr[$j + 1], $arr[$j]];
            list($arr[$j], $arr[$j + 1]) = $rank == 'desc' ? [$big, $small] : [$small, $big];
        }
    }
    return $arr;
}

$a = r([1,33,5,70,9,4], 'asc');

print_r(implode(',', $a));
