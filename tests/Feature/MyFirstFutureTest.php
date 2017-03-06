<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MyFirstFutureTest extends TestCase
{
    public function testHomePage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testCalcPage()
    {
        $array = array(
            "a" => "4",
            "b" => "0",
            "action" => "/",
        );
        $response = $this->post('/calc', $array);
        $response->assertStatus(200);
        $response->assertSee("don&#039;t divide by zero");
    }

}