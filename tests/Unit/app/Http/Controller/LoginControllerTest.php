<?php

namespace Tests\Unit\app\Http\Controller;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Nguoidung;

class LoginControllerTest extends TestCase
{
    /**
     * test case login fails
     * @return [type] [description]
     */
    public function testNoDataWhenUserNameIsNull() { 
      // khởi tạo dữ liệu
      $dataArr = [
        'username'  => '',
        'password'  => '123456'
      ];

      // lấy dữ liệu từ model
      $nguoidung  = new Nguoidung();
      $success    = $nguoidung->getListUser($dataArr);

      // kết quả trả về
      $this->assertFalse($success);
    }

    /**
     * test case login fails
     * @return [type] [description]
     */
    public function testNoDataWhenPasswordIsNull() { 
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
    public function testDataWhenLoginFails() { 
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

    /**
     * test case login success
     * @return [type] [description]
     */
    public function testDataWhenLoginSuccess() { 
      // khởi tạo dữ liệu
      $dataArr = [
        'username'  => 'Mạnh Sang',
        'password'  => '12345'
      ];

      // lấy dữ liệu từ model
      $nguoidung  = new Nguoidung();
      $success    = $nguoidung->getListUser($dataArr);

      // kết quả trả về
      $this->assertTrue($success);
    }
}
