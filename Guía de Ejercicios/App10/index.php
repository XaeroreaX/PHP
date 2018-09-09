<?php

$arrayImpar = getArrayTenNumberImpar();

foreach($arrayImpar as $element)
{
    echo $element . "<br>";
}


function getArrayTenNumberImpar()
{

    $i = 1;
    $count = 0;
    $numbers;

    do
    {

        if($i % 2 != 0)
        {
            $count++;
            $numbers[$count] = $i;
        }

        $i++;

    }while($count < 10);


    return $numbers;
}

?>