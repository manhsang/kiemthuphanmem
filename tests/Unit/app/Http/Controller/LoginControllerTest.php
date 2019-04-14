<?php

namespace Tests\Unit\app\Http\Controller;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;

class LoginControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testNoDataWhenLogin() { 
      $data = [
        'UserName' => 'manhsang',
        'PassWord' => md5('sangtm3')
      ];
      $mock = Mockery::mock('Nguoidung');
      $mock->shouldReceive('getContent')
          ->once()
          ->andReturn('da test duoc');
      dd($mock);
    }
}
