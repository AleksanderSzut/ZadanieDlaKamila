<?php

    function generateMultiplicationTable(int $max):string
    {
        $content = "";
        for($x = 1; $x <= $max; $x++)
        {
            $content .= '<div class="row">';
            for($y = 1; $y <= $max; $y++)
            {
                $result = $x*$y;

                $additionalClass = "";

                if($x == 1 || $y == 1)
                    $additionalClass = 'header';

                $content .='<div class="item '.$additionalClass.'">'.$result.'</div>';
            }
            $content .= '</div>';
        }
        return $content;
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 3</title>
    <style>
        body
        {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .multiplicationTable
        {

        }
        .row
        {
            display: flex;
        }
        .item
        {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid black;
        }
        .item.header
        {
            background-color: #d7a2a2;
        }
    </style>
</head>
<body>
    <div class="multiplicationTable"><?=generateMultiplicationTable(12)?></div>
</body>
</html>
