<?php

namespace App;
use App\FormatInterface;

class FormatFactory 
{
    public function getStringFormat(String $string, String $format)
    {
        if ($format == 'json') {
            return new JsonFormat($string);
        }
        else if ($format == 'xml') {
            return new XmlFormat($string);
        }
        else if ($format == 'html') {
            return new HtmlFormat($string);
        }

        return null;
    }
}