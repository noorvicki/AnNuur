<?php

namespace App\Repositories;

use App\Models\Kategori;
use App\Repositories\BaseRepository;

/**
 * Class KategoriRepository
 * @package App\Repositories
 * @version April 11, 2020, 12:06 am UTC
*/

class KategoriRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kategori'
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
        return Kategori::class;
    }
}
