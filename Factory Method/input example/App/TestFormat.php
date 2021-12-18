<?php

namespace App;
use App\FormatFactory;

class TestFormat 
{
    public function testFormatString(String $string, string $format)
    {
        $format_factory = new FormatFactory();
        $get_format = $format_factory->getStringFormat($format);
        $get_format->printFormat($string);
    }

}