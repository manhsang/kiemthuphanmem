<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Nguoidung extends Model
{
    protected $table      = 'nguoidung';
    protected $primaryKey = 'id';

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'created_at';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'HoTen',
        'UserName',
        'PassWord',
        'created_at',
        'updated_at'
    ];

    public $timestamp = true;

    public function getListUser($data) {
      $results = Nguoidung::where('UserName', $data['username'])
                        ->where('PassWord', md5($data['password']))
                        ->first();
      return $results;
    }

    public function getListUserWhenLoginSuccess() {
      $results = $this->all();
      return $results;
    }

    public function getListDetail($id) {
      $results = Nguoidung::find($id)->first();
      return $results;
    }

    public function insertData($data) {
      $mahoa = md5($data->matkhau);
      $this->HoTen    = $data->hoten;
      $this->UserName = $data->ten;
      $this->PassWord = $mahoa;
      return $this->save();
    }
}
