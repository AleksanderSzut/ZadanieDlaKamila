<?php

/*1.b*/

function getAllDivisible($upTo, $divisor, $type = 1):array
{
    $arrayNumber = array();
    if($type == 1)
    {
        $i = 0;
        while($i <= $upTo)
        {
            if($i%$divisor == 0)
            {
                array_push($arrayNumber, $i);
            }
            $i++;
        }
    }
    else
    {
        for($i = 0; $i <= $upTo; $i++)
        {
            if($i%$divisor == 0)
            {
                array_push($arrayNumber, $i);
            }
        }
    }
    return $arrayNumber;
}

$result = getAllDivisible(30, 3, 2);
foreach ($result as $value)
{
    echo $value.'<br>';
}