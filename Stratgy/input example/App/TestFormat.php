<?php

namespace App;

class TestFormat 
{
    public function testFormatString(String $string)
    {

        $context = new Context(new HTMLFormat());		
        print "print in HTML Formate" . $context->executeStrategy($string) . '<br><br>';

        $context = new Context(new JsonFormat());		
        print "print in Json Formate" . $context->executeStrategy($string) . '<br><br>';

        $context = new Context(new XmlFormat());		
        print "print in XML Formate" . $context->executeStrategy($string) . '<br><br>';

    }
}