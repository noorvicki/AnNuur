<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\BaseRepository;

/**
 * Class PostRepository
 * @package App\Repositories
 * @version April 11, 2020, 12:28 am UTC
*/

class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'judul',
        'kategori',
        'tag',
        'gambar',
        'body'
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
        return Post::class;
    }
}
