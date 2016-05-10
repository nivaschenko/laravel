<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DialControllerTest extends TestCase
{
    public function testIndexError()
    {
        $response = $this->call('POST', '/dial');
        
        $this->assertEquals(400, $response->getStatusCode());
        
        $response = $this->call('POST', '/dial', [
            'CallSid' => 'hjdsfgKJFDf48349hjdfkjh439hfkj38f',
            'From' => '+1234567890',
            'To' => '+1234567890']);
        
        $this->assertEquals(200, $response->getStatusCode());
    }
    
    public function testIndexSuccess()
    {        
        $response = $this->call('POST', '/dial', [
            'CallSid' => 'hjdsfgKJFDf48349hjdfkjh439hfkj38f',
            'From' => '+1234567890',
            'To' => '+1234567890']);
        
        $this->assertEquals(200, $response->getStatusCode());
    }
}
