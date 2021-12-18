<?php

namespace App;
use App\StratgyInterface;


class HtmlFormat implements StratgyInterface
{
    
    public function printFormat(string $string)
    {
        return '<h1>' . $string . '</h1>';
    }
}