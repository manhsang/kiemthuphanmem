<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Nguoidung;

class BasicTest extends DuskTestCase
{
    public function testLoginFails()
    {
      $this->browse(function ($browser) {
          $browser->visit('kiemthu/public/')
                ->waitForText('Vui lòng đăng nhập nhé!')
                ->type('username', 'Mạnh Sang')
                ->type('password', '1')
                ->assertSee('Đăng nhập')
                ->press('Đăng nhập')
                ->assertPathIs('/kiemthu/public/')
                ->assertSee('Bạn nhập dữ liệu chưa đúng...!')
                ->visit('/kiemthu/public/');
      });
    }
    public function testLoginSuccess()
    {
      $this->browse(function ($browser) {
          $browser->visit('kiemthu/public/')
                ->waitForText('Vui lòng đăng nhập nhé!')
                ->type('username', 'Mạnh Sang')
                ->type('password', '12345')
                ->assertSee('Đăng nhập')
                ->press('Đăng nhập')
                ->assertPathIs('/kiemthu/public/home')
                ->visit('/kiemthu/public/home');
      });
    }
}
