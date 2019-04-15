<?php

namespace Tests\Unit\app\Http\Controller;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Nguoidung;

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

    /**
     * test case login fails
     * @return [type] [description]
     */
    public function testNoDataWhenLoginFails() { 
      // khởi tạo dữ liệu
      $dataArr = [
        'username'  => 'Nguyễn Văn A',
        'password'  => ''
      ];

      // lấy dữ liệu từ model
      $nguoidung  = new Nguoidung();
      $success    = $nguoidung->getListUser($dataArr);

      // kết quả trả về
      $this->assertFalse($success);
    }

    /**
     * test case login success
     * @return [type] [description]
     */
    public function testDataWhenLoginSuccess() { 
      // khởi tạo dữ liệu
      $dataArr = [
        'username'  => 'Nguyễn Văn A',
        'password'  => 'sangtm3'
      ];

      // lấy dữ liệu từ model
      $nguoidung  = new Nguoidung();
      $success    = $nguoidung->getListUser($dataArr);

      // kết quả trả về
      $this->assertFalse($success);
    }
}
