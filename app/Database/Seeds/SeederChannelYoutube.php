<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederChannelYoutube extends Seeder
{
     public function run()
    {
        $data  =  [
            [
                'link_media'            => 'https://www.youtube.com/channel/UCcGcyhbgiRwluHO_eSq8o3Q',
                'link_title'            => 'Link Youtube',
                'link_coding'            => 'fab fa-youtube',
            ],
            [
                'link_media'            => 'https://www.youtube.com/channel/UCcGcyhbgiRwluHO_eSq8o3Q',
                'link_title'            => 'Link Facebook',
                'link_coding'            => 'fab fa-facebook-f',
            ],
            [
                'link_media'            => 'https://www.youtube.com/channel/UCcGcyhbgiRwluHO_eSq8o3Q',
                'link_title'            => 'Link Instagram',
                'link_coding'            => 'fab fa-instagram',
            ],
            [
                'link_media'            => 'https://www.youtube.com/channel/UCcGcyhbgiRwluHO_eSq8o3Q',
                'link_title'            => 'Link Tik Tok',
                'link_coding'            => 'fab fa-instagram',
            ],
            
        ];
        $insert = $this->db->table('media_sosial');
        $insert->insertBatch($data);
    }
}
