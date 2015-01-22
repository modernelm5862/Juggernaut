<?php

$filename = "ignition.csv";

//if (file_exists($filename)){
//    echo "The file " . $filename . " exists" . "<br>";
//
//    $fileReader = fopen($filename, 'r');
//
////because I know that there are 3 people in the CSV
//    for ($people = 0; $people < 3; $people++) {
//        var_dump(fgetcsv($fileReader));
//    }
//
//    fclose($fileReader);
//
//} else {
//    echo "The file " . $filename . " could not be found.";
//}

$fileReader = fopen($filename, 'r');
var_dump(feof($fileReader));
fclose($fileReader);

//try {
//    $fileReader = fopen($filename, 'r');
//
////because I know that there are 3 people in the CSV
//    for ($people = 0; $people < 3; $people++) {
//        var_dump(fgetcsv($fileReader));
//    }
//
//    fclose($fileReader);
//} catch (Exception $errorException) {
//    echo 'Caught exception: ', $errorException->getMessage();
//}
