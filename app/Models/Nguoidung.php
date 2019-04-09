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
                        ->get();
      return $results;
    }
}
