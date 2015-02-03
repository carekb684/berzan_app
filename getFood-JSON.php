<?php

header('Content-Type: text/html; charset=utf-8');

/**
 * Function getFood returns:
 *    a string representing the menu of the day.
 * 
 * If no food is served the specified day
 *    the empty string is returned.
 * 
 * @param type $week  
 * 0 = This week
 * 1 = Next week
 * 
 * @param type $day
 * 0 = Monday
 * 1 = Tuesday
 * 2 = Wednesday
 * 3 = Thursday
 * 4 = Friday
 * 
 * @param type $food
 * 0 = First
 * 1 = Second
 * 2 = Third
 * 
 * @return type String
 * 
 * © ph0gel, 2015
 */
function getFood($week, $day, $food) {
    $data = json_decode(file_get_contents('http://meny.dinskolmat.se/berzeliusskolan/?fmt=json'), true);

    if (!isset($data['weeks'][$week]['days'][$day]['items'][$food])) {
        return "";
    } else {
        return $data['weeks'][$week]['days'][$day]['items'][$food];
    }
}

