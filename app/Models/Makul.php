<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Makul
 * @package App\Models
 * @version December 28, 2022, 11:30 am UTC
 *
 * @property string $nama_makul
 * @property string $dosen
 * @property integer $sks
 * @property integer $jumlah
 * @property string $ruangan
 */
class Makul extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'makuls';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_makul',
        'dosen',
        'sks',
        'jumlah',
        'ruangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_makul' => 'string',
        'dosen' => 'string',
        'sks' => 'integer',
        'jumlah' => 'integer',
        'ruangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_makul' => 'required',
        'dosen' => 'required',
        'sks' => 'required',
        'jumlah' => 'required',
        'ruangan' => 'required'
    ];

    
}
