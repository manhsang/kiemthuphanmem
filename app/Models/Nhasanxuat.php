<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Nhasanxuat extends Model
{
    protected $table      = 'nhasanxuat';
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
        'Ten',
        'created_at',
        'updated_at'
    ];

    public $timestamp = true;

    public function getListNhasanxuat() {
      $result = $this->all();
      return $result;
    }
}
