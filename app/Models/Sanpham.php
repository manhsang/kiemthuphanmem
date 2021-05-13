<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table      = 'sanpham';
    protected $primaryKey = 'id';

    private $nhasanxuat = null;

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
        'TenSanPham',
        'nhasanxuat_id',
        'loaisanpham_id',
        'HinhMinhHoa',
        'created_at',
        'updated_at'
    ];

    public $timestamp = true;

    public function getListSanpham() {
      $result = $this->all();
      return $result;
    }
}