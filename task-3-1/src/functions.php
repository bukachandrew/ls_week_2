<?php

function createUser()
{
    return [
        'name' => NAMES[array_rand(NAMES)],
        'age' => random_int(18, 45)
    ];
}

function fileWrite(string $text, string $nameFile): void
{
    file_put_contents($nameFile, $text);
}

function fileRead(string $pathFile)
{
    return strval(file_get_contents($pathFile));
}