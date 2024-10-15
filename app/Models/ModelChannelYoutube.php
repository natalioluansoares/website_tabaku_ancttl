<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelChannelYoutube extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'media_sosial';
    protected $primaryKey       = 'id_link';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['link_media', 'link_title', 'link_coding', 'link_style', 'created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
     protected $validationRules      = [
            'link_media'  => 'required',
            'link_title'  => 'required',
            'link_coding'  => 'required',
    ];
    protected $validationMessages   = [
            'link_media' => [
            'required'  => 'Dados Link Media  Sei Mamuk.',
        ],
            'link_title' => [
            'required'  => 'Dados Link Title  Sei Mamuk.',
        ],
            'link_coding' => [
            'required'  => 'Dados Link Coding  Sei Mamuk.',
        ],
    ];
}
