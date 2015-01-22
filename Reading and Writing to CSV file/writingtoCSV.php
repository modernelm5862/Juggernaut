<?php

$users = array(
    array('Alfie', 'Driver', '20'),
    array('James', 'Chadband', '30'),
    array('Peter', 'Welch', '30')
);

$filename = "ignition.csv";

try {
    $fileWriter = fopen($filename, 'a');
    foreach ($users as $user) {
        fputcsv($fileWriter, $user);
    }
} catch (Exception $errorException) {
    echo 'Caught exception: ', $errorException->getMessage();
}