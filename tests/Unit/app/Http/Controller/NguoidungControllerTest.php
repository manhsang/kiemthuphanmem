<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Nguoidung;

class NguoidungControllerTest extends TestCase
{
  /**
   * test data insert success
   *
   * @return void
   */
  public function testItCanCreateNguoidungSuccess()
  {
    // khởi tạo dữ liệu
    $dataArr = [
      'hoten'     => 'Nguyễn Văn A',
      'ten'       => 'Văn A',
      'matkhau'   => '123456'
    ];

    // lấy dữ liệu từ model
    $dataObject = (object) $dataArr;
    $nguoidung  = new Nguoidung();
    $success    = $nguoidung->insertData($dataObject);

    // kết quả trả về
    $this->assertTrue($success);
  }

  /**
   * test data insert fails
   *
   * @return void
   */
  public function testItCanCreateNguoidungFails()
  {
    // khởi tạo dữ liệu
    $dataArr = [
      'hoten'     => 'Nguyễn Văn B',
      'ten'       => 'Văn A',
      'matkhau'   => ''
    ];

    // lấy dữ liệu từ model
    $dataObject = (object) $dataArr;
    $nguoidung  = new Nguoidung();
    $success    = $nguoidung->insertData($dataObject);

    // kết quả trả về
    $this->assertFalse($success);
  }
}
