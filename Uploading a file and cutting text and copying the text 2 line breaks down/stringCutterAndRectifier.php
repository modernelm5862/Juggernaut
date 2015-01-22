<?php
$message = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$limit = 105;

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

    echo $finalMessage;
    echo PHP_EOL;
}

correctingWord($message, $limit);
