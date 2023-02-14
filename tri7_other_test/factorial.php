<?php

function factorial($num){
    return $num <= 1 ? 1 :  $num * factorial($num - 1);
}

echo factorial(6);