<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function __construct() 
    {
      
    }

    /**
     * Show page home
     * @param Request $request
     */
    public function index(Request $request)
    {
      return view('backend.page.login');
    }
}
