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

    /**
     * 
     * @param Request $request
     */
    public function handersLogin(Request $request)
    {
      $this->data->getListUser($request);
      if(empty($this->data) == false) {
        return redirect()->route('login');
      } else {
        return redirect()->route('home');
      }
    }
}
