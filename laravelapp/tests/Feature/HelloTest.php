<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHello(){
        $this->assertTrue(true);

        $arr = [];
        $this->assertEmpty($arr);

        $msg = 'Hello';
        $this->assertEquals('Hello',$msg);

        $n = random_int(0,100);
        $this->assertLessThan(100,$n);
    }

    public function testHello2 (){
        $this->assertTrue(true);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/hello');
        $response->assertStatus(302);

        $response = $this->get('/hello');
        $response->assertStatus(302);

        $response = $this->get('/no_route');
        $response->assertStatus(404);
    }
}
