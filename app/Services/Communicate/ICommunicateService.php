<?php
namespace App\Services\Communicate;

interface ICommunicateService
{
    public function newNumber($iso, $type, $params);

    public function dialXml($number);
    
}