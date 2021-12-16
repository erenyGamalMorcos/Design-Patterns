<?php

namespace App;
use App\FormatInterface;


class HtmlFormat implements FormatInterface
{
    
    public function printFormat(string $string)
    {
        echo '<h1>' . $string . '</h1>';
    }
}