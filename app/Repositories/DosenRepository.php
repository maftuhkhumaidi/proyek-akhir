<?php

namespace App\Repositories;

use App\Models\Dosen;
use App\Repositories\BaseRepository;

/**
 * Class DosenRepository
 * @package App\Repositories
 * @version December 28, 2022, 11:26 am UTC
*/

class DosenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nidn',
        'nama',
        'makul',
        'pendidikan',
        'status'
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
        return Dosen::class;
    }
}
