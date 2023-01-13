<?php

function checked($array, $campo)
{

    if (in_array($campo, $array)) {
        echo "checked";
    }
}