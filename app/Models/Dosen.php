<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Dosen
 * @package App\Models
 * @version December 28, 2022, 11:26 am UTC
 *
 * @property integer $nidn
 * @property string $nama
 * @property string $makul
 * @property string $pendidikan
 * @property string $status
 */
class Dosen extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'dosens';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nidn',
        'nama',
        'makul',
        'pendidikan',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nidn' => 'integer',
        'nama' => 'string',
        'makul' => 'string',
        'pendidikan' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nidn' => 'required',
        'nama' => 'required',
        'makul' => 'required',
        'pendidikan' => 'required',
        'status' => 'required'
    ];

    
}
