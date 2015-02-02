<?php

function taskList()
{
    $array = arrayArea();
    $camelCase = camelCaseFormat($array);
    print_r($camelCase);
}

taskList();

function arrayArea()
{
    $offices = array(
        array(
            'name' => 'Hessle units',
            'town' => 'hEsslE',
            'postcode' => 'hU94Jd',
            'phone' => '07324568374'),
        array(
            'name' => 'american UniTs',
            'town' => 'calIFornIA',
            'postcode' => 'sjd39fd',
            'phone' => '07263526374'),
        array(
            'name' => 'humbeR quays Units',
            'town' => 'Humber QUAys',
            'postcode' => 'Hs12ds',
            'phone' => '07234905984')
    );
    return $offices;
}

function camelCaseFormat($array)
{
    foreach ($array as $key => $value) {
        $array[$key]['name'] = ucwords(strtolower($value['name']));
        $array[$key]['town'] = ucwords(strtolower($value['town']));

        $postcode = $value['postcode'];
        $partialLength = strlen($postcode) - 3;
        $fullLength = strlen($postcode);
        $start = substr($postcode, 0, $partialLength);
        $end = substr($postcode, $partialLength, $fullLength);

        $array[$key]['postcode'] = strtoupper("$start $end");

        $number = $value['phone'];
        $start = substr($number, 1, 4);
        $end = substr($number, 5, 11);
        $ukNumber = "+44 $start $end";
        $array[$key]['phone'] = ucwords(strtolower($ukNumber));
    }
    return $array;
}
