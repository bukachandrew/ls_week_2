<?php

function fileWrite(string $text, string $nameFile): void
{
    file_put_contents($nameFile, $text);
}

function fileRead(string $pathFile)
{
    return strval(file_get_contents($pathFile));
}