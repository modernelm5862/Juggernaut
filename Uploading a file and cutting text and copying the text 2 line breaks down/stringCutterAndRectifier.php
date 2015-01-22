<?php

function detectLength($messageDetect)
{
    $messageLength = strlen($messageDetect);
    return $messageLength;
}

function cuttingToLength($messageCutter, $limitCutter)
{
    $messageLength = detectLength($messageCutter);
//    echo $messageLength;
//    echo PHP_EOL;

    if ($messageLength > $limitCutter){
        $cutMessage = substr($messageCutter, 0, $limitCutter);
        return $cutMessage;

    } else {
        return $messageCutter;
    }
}

function detectingEndOfString ($endOfMessage, $limitEnd)
{
    $cutMessage = cuttingToLength($endOfMessage, $limitEnd);

    $spaceFinder = strrpos($cutMessage, ' ');
    return $spaceFinder;
}

function correctingWord ($messageCorrect, $limit)
{
    $detectingEndOfString = detectingEndOfString($messageCorrect, $limit);

    $findEndOfString = substr($messageCorrect, 0, $detectingEndOfString);
    $finalMessage = $findEndOfString . '...';

    return $finalMessage;
}

correctingWord($message, $limit);
