<?php

namespace App;

class FormatFactory 
{
    public static $class_type = [
        'json' => JsonFormat::class,
        'xml'  => XmlFormat::class,
        'html' => HtmlFormat::class,

    ];
    public function getStringFormat(String $format)
    {
        $object = new self::$class_type[$format];
        
        return $object;
    }
}