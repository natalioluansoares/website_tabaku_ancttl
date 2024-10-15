<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederMediaAncttl extends Seeder
{
    public function run()
    {
        $data  =  [
            [
                'naran_intervista'            => 'Natalio Luan Soares',
                'topiko'                      => 'Prevene Konsumo Tabaku Tamba Bele Estraga Saude',
                'fatin'                       =>  'Fatuberlio',
                'data'                        =>  '2023:11:7',
                'descripsaun'                 =>  'Tabaku mak hanesan equipamento bele estraga ita nia saude. Quando Ita Konsumo tabaku impakto liu ba ita nia pulmaun',
                'conteudo'                    =>  'Tabaku mak hanesan equipamento bele estraga ita nia saude. Quando Ita Konsumo tabaku impakto liu ba ita nia pulmaun',
                'link_youtube'                =>  'You tube',
                'link_facebook'               =>  'Facebook',
                'link_tik_tok'                =>  'Tik Tok',

            ],
            [
                'naran_intervista'            => 'Natalio Luan Soares',
                'topiko'                      => 'Prevene Konsumo Tabaku Tamba Bele Estraga Saude',
                'fatin'                       =>  'Fatuberlio',
                'data'                        =>  '2023:11:7',
                'descripsaun'                 =>  'Tabaku mak hanesan equipamento bele estraga ita nia saude. Quando Ita Konsumo tabaku impakto liu ba ita nia pulmaun',
                'conteudo'                    =>  'Tabaku mak hanesan equipamento bele estraga ita nia saude. Quando Ita Konsumo tabaku impakto liu ba ita nia pulmaun',
                'link_youtube'                =>  'You tube',
                'link_facebook'               =>  'Facebook',
                'link_tik_tok'                =>  'Tik Tok',
            ],
            [
                'naran_intervista'            => 'Natalio Luan Soares',
                'topiko'                      => 'Prevene Konsumo Tabaku Tamba Bele Estraga Saude',
                'fatin'                       =>  'Fatuberlio',
                'data'                        =>  '2023:11:7',
                'descripsaun'                 =>  'Tabaku mak hanesan equipamento bele estraga ita nia saude. Quando Ita Konsumo tabaku impakto liu ba ita nia pulmaun',
                'conteudo'                    =>  'Tabaku mak hanesan equipamento bele estraga ita nia saude. Quando Ita Konsumo tabaku impakto liu ba ita nia pulmaun',
                'link_youtube'                =>  'You tube',
                'link_facebook'               =>  'Facebook',
                'link_tik_tok'                =>  'Tik Tok',
            ],
            [
               'naran_intervista'            => 'Natalio Luan Soares',
                'topiko'                      => 'Prevene Konsumo Tabaku Tamba Bele Estraga Saude',
                'fatin'                       =>  'Fatuberlio',
                'data'                        =>  '2023:11:7',
                'descripsaun'                 =>  'Tabaku mak hanesan equipamento bele estraga ita nia saude. Quando Ita Konsumo tabaku impakto liu ba ita nia pulmaun',
                'conteudo'                    =>  'Tabaku mak hanesan equipamento bele estraga ita nia saude. Quando Ita Konsumo tabaku impakto liu ba ita nia pulmaun',
                'link_youtube'                =>  'You tube',
                'link_facebook'               =>  'Facebook',
                'link_tik_tok'                =>  'Tik Tok',
            ],
            [
                'naran_intervista'            => 'Natalio Luan Soares',
                'topiko'                      => 'Prevene Konsumo Tabaku Tamba Bele Estraga Saude',
                'fatin'                       =>  'Fatuberlio',
                'data'                        =>  '2023:11:7',
                'descripsaun'                 =>  'Tabaku mak hanesan equipamento bele estraga ita nia saude. Quando Ita Konsumo tabaku impakto liu ba ita nia pulmaun',
                'conteudo'                    =>  'Tabaku mak hanesan equipamento bele estraga ita nia saude. Quando Ita Konsumo tabaku impakto liu ba ita nia pulmaun',
                'link_youtube'                =>  'You tube',
                'link_facebook'               =>  'Facebook',
                'link_tik_tok'                =>  'Tik Tok',
            ],
            
        ];
        $insert = $this->db->table('media_anct_tl');
        $insert->insertBatch($data);
    }
}
