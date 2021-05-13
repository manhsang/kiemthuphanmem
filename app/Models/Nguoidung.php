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
      try {
        $results = Nguoidung::where('UserName', $data['username'])
                            ->where('PassWord', md5($data['password']))
                            ->first();
        if(empty($results)) {
          return false;
        }
        return true;
      } catch (\Exception $e) {
        return $e->getMessage();
      }
      
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
      try {
        if(empty($data->hoten) || empty($data->ten) || empty($data->matkhau)) {
          return false;
        }
        $mahoa = md5($data->matkhau);
        $this->HoTen    = $data->hoten;
        $this->UserName = $data->ten;
        $this->PassWord = $mahoa;
        if(!$this->save()) {
          return false;
        }
        return true;
      } catch (\Exception $e) {
        return $e->getMessage();
      }
    }

    public function getUpdate($id) {
      $results = Nguoidung::where('id', $id)->get();
      return $results;
    }

    public function capnhat($data, $id) {
      try {
        if(empty($data)) {
          return false;
        }
        $updateData = [
          'HoTen'    => $data['hoten'],
          'UserName' => $data['ten'],
          'PassWord' => md5($data['matkhau'])
        ];
        $result = $this->where('id', $id)
                  ->update($updateData);
        if($result) {
          return true;
        }
        return false;
      } catch (\Exception $e) {
        return $e->getMessage();
      }
    }
}
