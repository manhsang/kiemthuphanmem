<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nguoidung;

class NguoidungController extends Controller
{
  CONST NUMBER = '0';
  private $nguoidung = null;
    /**
     * 
     */
    public function __construct() {
      $this->nguoidung = new Nguoidung();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = $this->nguoidung->getListUserWhenLoginSuccess();
      return view('backend.page.nguoidung', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->nguoidung->insertData($request);
      if($this->nguoidung) {
        return redirect()->route('nguoidung.index')->with('success', 'Thêm thành công...!');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $show = $this->nguoidung->getListDetail($id);
      if(!$this->nguoidung) {
        return 'errors';
      }
      return view('backend.page.show', ['show' => $show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = [];
      $this->data['id']       = $id;
      $this->data['arrData']  = $this->nguoidung->getListDetail($id);
      if(!$this->data) {
        return route('backend.page.edit')->with('errors', 'không có dữ liêu...!');
      }
      return view('backend.page.edit', ['data' => $this->data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       dd('da update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      dd('delete');
    }
}
