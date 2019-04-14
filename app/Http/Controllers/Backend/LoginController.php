<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Nguoidung;

class LoginController extends Controller
{
  private $data;
    public function __construct() 
    {
      $this->data = new Nguoidung();
    }

    /**
     * Show page home
     * @param Request $request
     */
    public function index(Request $request)
    {
      return view('backend.page.login');
    }

    public function getContent()
    {
      return 'da test duoc';
    }

    /**
     * 
     * @param Request $request
     */
    public function handersLogin(Request $request)
    {
      $results = $this->data->getListUser($request);
      if(empty($results)) {
        return redirect()->route('login')->withErrors("Bạn nhập dữ liệu chưa đúng...!");
      } else {
        return redirect()->route('home');
      }
    }
}
