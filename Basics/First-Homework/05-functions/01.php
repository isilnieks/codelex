<?php
function codelex(string $string): string
{
    return $string . 'codelex';
}

echo codelex('hello ') . PHP_EOL;