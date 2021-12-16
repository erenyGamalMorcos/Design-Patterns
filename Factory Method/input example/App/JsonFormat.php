<?php

namespace App;
use App\FormatInterface;


class JsonFormat implements FormatInterface
{
    
    public function printFormat(string $string)
    {
        header('Content-Type: application/json');

        echo json_encode(['output' => $string], JSON_PRETTY_PRINT);
    }
}