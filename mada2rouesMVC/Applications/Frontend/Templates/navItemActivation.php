<?php

function navItemActivation($pageTitle, $itemName)
{
    $result = 'nav-item';
    if($pageTitle == $itemName) {
        $result .= ' active';
    }

    return $result;
}