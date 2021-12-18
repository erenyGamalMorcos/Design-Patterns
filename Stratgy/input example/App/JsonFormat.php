<?php

namespace App;
use App\StratgyInterface;


class JsonFormat implements StratgyInterface
{
    
    public function printFormat(string $string)
    {
        return json_encode(['output' => $string], JSON_PRETTY_PRINT);
    }
}