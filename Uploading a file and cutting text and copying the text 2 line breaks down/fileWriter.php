<?php
require_once("fileReader.php");

$fileHolder = fileHolder();

function writingToFile($file)
{
    $cutPhrase = outputFileContents($file);
    $writtenPhrase = $cutPhrase;
    file_put_contents($file, PHP_EOL . PHP_EOL . $writtenPhrase, FILE_APPEND);
    echo 'File written Successfully' . PHP_EOL;
}

writingToFile($fileHolder);