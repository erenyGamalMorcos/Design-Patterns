<?php

namespace App;

class TestFormat 
{
    public function testFormatString(String $string, string $format)
    {
        $format_factory = new FormatFactory();
        $get_format_object = $format_factory->getStringFormat($format);

        $context = new Context($get_format_object);		
        print "print stratgy" . $context->executeStrategy($string) . '<br><br>';
    }

}