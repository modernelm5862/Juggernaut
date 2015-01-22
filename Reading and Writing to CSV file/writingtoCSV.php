<?php

function fileLocation(){
    $fileName = "file.csv";
    return $fileName;
}

function fileSearcher($file)
{
    if (file_exists($file)){
        echo 'The file ' . $file . ' exists' . PHP_EOL;
    } else {
        echo'The file ' . $file . ' does not exist but will be written' . PHP_EOL;
    }
}

fileSearcher(fileLocation());

function users()
{
    $users = array(
        array('Alfie', 'Driver', '20'),
        array('James', 'Chadband', '30'),
        array('Peter', 'Welch', '30')
    );
    return $users;
}

function writeToFile($file, $users)
{
    $fileWriter = fopen($file, 'a');
    foreach ($users as $inputtingUser) {
        fputcsv($fileWriter, $inputtingUser, ',', '"');
    }
    echo 'File written Successfully' . PHP_EOL;
    fclose($fileWriter);

    file_put_contents($file, PHP_EOL, FILE_APPEND);
}

writeToFile(fileLocation(), users());