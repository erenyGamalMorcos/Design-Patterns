<?php

namespace App;
use App\StratgyInterface;

class Context {
    private $strategy;
 
    public function __construct(StratgyInterface $strategy)
    {
        $this->strategy = $strategy;   
    }
 
    public function executeStrategy(string $string)
    {
       return $this->strategy->printFormat($string);
    }
 }