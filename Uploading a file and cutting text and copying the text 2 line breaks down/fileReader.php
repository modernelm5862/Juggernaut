<?php
require_once('stringCutterandRectifier.php');

function fileHolder(){
    $fileName = "ipsum.txt";
    return $fileName;
}

$fileHolder = fileHolder();

function fileSearcher($file){
    if (file_exists($file)){
        echo 'The file ' . $file . ' exists' . PHP_EOL;
    } else {
        die('The file ' . $file . ' does not exist' . PHP_EOL);
    }
}

fileSearcher($fileHolder);

function outputFileContents($file)
{
    $message = file_get_contents($file);
    $limit = 105;
    $finalMessage = correctingWord($message, $limit);
    return $finalMessage;
}

outputFileContents($fileHolder);
