<?php

namespace App;

class FormatFactory 
{
    public function getStringFormat(String $format)
    {
        if ($format == 'json') {
            return new JsonFormat();
        }
        else if ($format == 'xml') {
            return new XmlFormat();
        }
        else if ($format == 'html') {
            return new HtmlFormat();
        }

        return null;
    }
}