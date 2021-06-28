<?php

function calMonth($money, $rate)
{
    $interest = $money;
    $month = 0;
    while($interest < 2*$money)
    {
        $interest += $interest*($rate/100);
        $month++;
    }

    return $month;
}

echo calMonth(1000000, 5);

function calMonthRecursion($money, $rate)
{
    
}

