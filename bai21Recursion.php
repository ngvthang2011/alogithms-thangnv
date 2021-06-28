<?php

function calSalary($salary, $n)
{
    $salaryNow = $salary;
    for($i=1; $i < $n; $i++)
    {
        $salaryNow *= 1.1;
    }
    return $salaryNow;
}

echo calSalary(1000000, 5).'<br/>';

function calSalaryRecursion($salary, $n)
{
    if($n == 1){
        return $salary;
    }
    return calSalaryRecursion($salary*1.1, $n-1);
}

echo calSalaryRecursion(1000000, 5);