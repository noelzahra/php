<?php
//concat params with a separator

function concat_parts(...$params)
{
    return implode(":", ...$params);
}

$list = ['London', 'Paris', 'Milan', 'Munich'];

echo concat_parts($list);