<?php

namespace App\Repositories;

use App\Models\Makul;
use App\Repositories\BaseRepository;

/**
 * Class MakulRepository
 * @package App\Repositories
 * @version December 28, 2022, 11:30 am UTC
*/

class MakulRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_makul',
        'dosen',
        'sks',
        'jumlah',
        'ruangan'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Makul::class;
    }
}
