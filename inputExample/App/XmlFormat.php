<?php

namespace App;
use App\StratgyInterface;

class XmlFormat implements StratgyInterface
{
    
    public function printFormat(string $string)
    {
        $xml = new \SimpleXMLElement('<root/>');
        $this->to_xml($xml, ['header' => 'This is an XML example to print the output in xml format', 'output' => $string]);
        return $xml->asXML();
    }


    private function to_xml(\SimpleXMLElement $object, array $data)
    {   
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $new_object = $object->addChild($key);
                $this->to_xml($new_object, $value);
            } else {
                // if the key is an integer, it needs text with it to actually work.
                if ($key != 0 && $key == (int) $key) {
                    $key = "key_$key";
                }

                $object->addChild($key, $value);
            }   
        }   
    }   
}
