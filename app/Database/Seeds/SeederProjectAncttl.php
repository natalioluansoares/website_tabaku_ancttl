<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederProjectAncttl extends Seeder
{
    public function run()
    {
        $data  =  [
            [
                'introdusaun'            => 'Iha tinan 2023 Aliansa Nasionál Controlu Tabaku (ANCT-TL) hetan apoio hosi 
                                            Ministerio Juventude  Desportu  Arte no Kultura (MJDAK) hodi implementa atividade
                                            divulgasaun informasaun kona-ba impaktu tabaku ba ema nia saúde.Ejistensia media
                                            atu fasilita informasun ba publiku asesu,  hodi  hasae konesementu estudante no 
                                            foin sae sira relaciona ho risku husi fuma tabaku ba ema nia saude.',
                'titulo_projeito'       => 'Publiku Asesu Informasun Ho Tematiku Risku Uza Tabaku Ba Saude No Ekonomia Familia.',
                'objectivo_projeito'       => 'atu publika inpormasun perigu uzatabaku ba ema nia saude no ekonomia familia',
                'durasaun_projeito'       => 'Tinan Ida',
                'implementasaun_projeito'       => 'Municipio Ermera, Manatuto, Likisa, Aileo No Manufahi',
                'benefisiariu_projeito'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'logical_frame_work'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'project_cycle_managament'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'project_managament_risk'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'result_based_managament'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'monitoring_indereita_direita'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'relatorio'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'lian_maktaka'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'diresaun'          => '4'
            ],
            [
                'introdusaun'            => 'Iha tinan 2023 Aliansa Nasionál Controlu Tabaku (ANCT-TL) hetan apoio hosi 
                                            Ministerio Juventude  Desportu  Arte no Kultura (MJDAK) hodi implementa atividade
                                            divulgasaun informasaun kona-ba impaktu tabaku ba ema nia saúde.Ejistensia media
                                            atu fasilita informasun ba publiku asesu,  hodi  hasae konesementu estudante no 
                                            foin sae sira relaciona ho risku husi fuma tabaku ba ema nia saude.',
                'titulo_projeito'       => 'Publiku Asesu Informasun Ho Tematiku Risku Uza Tabaku Ba Saude No Ekonomia Familia.',
                'objectivo_projeito'       => 'atu publika inpormasun perigu uzatabaku ba ema nia saude no ekonomia familia',
                'durasaun_projeito'       => 'Tinan Ida',
                'implementasaun_projeito'       => 'Municipio Ermera, Manatuto, Likisa, Aileo No Manufahi',
                'benefisiariu_projeito'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'logical_frame_work'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'project_cycle_managament'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'project_managament_risk'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'result_based_managament'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'monitoring_indereita_direita'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'relatorio'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'lian_maktaka'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'diresaun'          => '3'
            ],
            [
                'introdusaun'            => 'Iha tinan 2023 Aliansa Nasionál Controlu Tabaku (ANCT-TL) hetan apoio hosi 
                                            Ministerio Juventude  Desportu  Arte no Kultura (MJDAK) hodi implementa atividade
                                            divulgasaun informasaun kona-ba impaktu tabaku ba ema nia saúde.Ejistensia media
                                            atu fasilita informasun ba publiku asesu,  hodi  hasae konesementu estudante no 
                                            foin sae sira relaciona ho risku husi fuma tabaku ba ema nia saude.',
                'titulo_projeito'       => 'Publiku Asesu Informasun Ho Tematiku Risku Uza Tabaku Ba Saude No Ekonomia Familia.',
                'objectivo_projeito'       => 'atu publika inpormasun perigu uzatabaku ba ema nia saude no ekonomia familia',
                'durasaun_projeito'       => 'Tinan Ida',
                'implementasaun_projeito'       => 'Municipio Ermera, Manatuto, Likisa, Aileo No Manufahi',
                'benefisiariu_projeito'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'logical_frame_work'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'project_cycle_managament'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'project_managament_risk'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'result_based_managament'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'monitoring_indereita_direita'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'relatorio'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'lian_maktaka'       => 'Komunidade sira fasil atu asesu informasun liu husi media social',
                'diresaun'          => '13'
            ],
            
        ];
        $insert = $this->db->table('projeito_anct_tl');
        $insert->insertBatch($data);
    }
}
