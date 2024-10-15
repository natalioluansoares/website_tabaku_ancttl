<!DOCTYPE html>
<html>

<head>
    <title><?= $title?></title>
</head>
<style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            /* text-align: left; */
            font-size: 13px;
        }

        table thead tr td.nato {
            /* text-align: right; */
            /* text-align: left; */
            font-size: 13px;
            /* display: right; */
            text-align: center;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }
    </style>
<body>
           
            <center>
                <p>ANCT-TL, <?= date('d M Y',strtotime($projeito->created)); ?></p>
            </center>
            
            <p><br><h3>Introdusaun</h3><?= $projeito->introdusaun; ?></p>
            
            <p><br><h3>Titulo Projeito</h3><?= $projeito->titulo_projeito; ?></p>
            
            <p><br><h3>Objectivo Projeito</h3><?= $projeito->objectivo_projeito; ?></p>
            
            <p><br><h3>Durasaun Projeito</h3><?= $projeito->durasaun_projeito; ?></p>
            
            <p><b><h3>Localidade Implementasaun Projeito</h3></b><?= $projeito->implementasaun_projeito; ?></p>
            
            <p><br><h3>Benefisiariu Projeito</h3><?= $projeito->benefisiariu_projeito; ?></p>
            
            <p><br><h3>Logical Frame Work</h3><?= $projeito->logical_frame_work; ?></p>
            
            <p><br><h3>Project Cycle Managament</h3><?= $projeito->project_cycle_managament; ?></p>
            
            <p><br><h3>Project Managament Risk</h3><?= $projeito->project_managament_risk; ?></p>
            
            <p><br><h3>Result Based Managament</h3><?= $projeito->result_based_managament; ?></p>
            
            <p><br><h3>Monitoring Indireita No Direita</h3><?= $projeito->monitoring_indereita_direita; ?></p>
            
            <p><br><h3>Relatorio</h3><?= $projeito->relatorio; ?></p><br>
            
            <p><br><h3>Lian Maktaka</h3><?= $projeito->lian_maktaka; ?></p>

            <table>
            <thead>
                <tr>
                    <td colspan="" width="250" class="nato">ANCT-TL, <?= date('d M Y',strtotime($projeito->created)); ?></td>
                    <td colspan="4" width="600" class="nato"><p >ANCT-TL, <?= date('d M Y',strtotime($projeito->created)); ?></p></td>
                </tr>
            </thead>

        </table><br><br><br><br>
        <table>
            <thead>
                <tr>
                    <td colspan="" width="250" class="nato">(<?= helperDiresaun()->naran_kompleto_diresaun; ?>)</td>
                    <?php foreach ($diretor as $key => $value) :?>
                    <td colspan="4" width="600" class="nato">(<?= $value->naran_kompleto?>)</td>
                    <?php endforeach; ?>
                </tr>
            </thead>
        </table>
        </body>

</html>