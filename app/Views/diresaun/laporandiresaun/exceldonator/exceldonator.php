<!DOCTYPE html>
<html>

<head>
    <title>Relatorio Nasional ANCT-TL</title>
    <style type="text/css">
        .border-table{
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        .border-table th{
            border: 1 solid #000;
            font-weight: bold;
            text-align: center;
            background-color: #e1e1e1;
        }
        .border-table td{
            border: 1 solid #000;
        }
    </style>
</head>

<body>
    <center>
        <table width ="100%">
            <thead>
                <tr>
                    <!-- <th align="center">
                        <img src="uploads/img/logo.jpg" class="rounded-circle" width="80px"> -->
                    <!-- </th> -->
                    <th data-priority="1">
                        <div align="center" style="font-size: 18px;">
                            <font size="4" style="font-family:Wide Latin">
                                <b>Aliansa Nasional Controlo Tabaku Timor-Leste</b><br>
                                <span style="font-family:Times New Roman">Bairo Pite, Dili, Timor-Leste <br>
                                Telp.(0380)833395- 831194</span>
                            </font><br>
                            Web:<span style="font-family:Times New Roman; color:#3366cc">
                               http//www.anct-tl.ac.id</span>
                            Email:<span style="font-family:Times New Roman; color:#3366cc">
                               bairopite.aliansanasionalcontroltabaku@gmail.com</span>
                            <hr class="line-title">
                        </div>
                    </th>
                    <!-- <th align="center"> -->
                        <!-- <img src="template/assets/img/sigaru/TimorLeste.png" class="rounded-circle" width="80px"> -->
                    <!-- </th> -->
                </tr>
            </thead>
        </table>
    </center>
    <center>
        <p>
           <h3><strong> Relatorio Finansas ANCT-TL</strong></h3><br>
        </p>
    </center>
        <table class="border-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode </th>
                    <th>Instituisaun </th>
                    <th>Diresaun</th>
                    <th>Data</th>
                    <th>Horas</th>
                    <th>Saldo Apoia</th>
                    <th>Total Saldo</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $saldo=0; 
                $total=0; 
                $no=1; foreach($donator as $osan): ?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $osan->kode_osan ?></td>
                        <td><?= $osan->instituisaun ?></td>
                        <td><?= $osan->naran_kompleto_diresaun?></td>
                        <td><?= $osan->data_osan_tama_donator?></td>
                        <td><?= $osan->horas_osan_tama_donator?></td>
                        <td>$ <?= number_format($osan->saldo_tama_donator, 2) ?></td>
                        <td>$ <?= number_format($osan->total_saldo,2)?></td>
                    </tr>
                <?php
                $saldo += $osan->saldo_tama_donator; 
                $total = $osan->total_saldo; 
                endforeach; 
                ?>
                </tbody>
                <tbody id="table1">
                    <tr>
                        <td colspan="5" ><h4>Total Osan</h4></td>
                        <td title="$ <?= number_format($saldo, 2)?>" colspan="1"><strong>$ <?= number_format($saldo, 2)?></strong></td>
                        <td title="$ <?= number_format($total, 2)?>"><strong>$ <?= number_format($total, 2)?></strong></td>
                    </tr>
                </tbody>
        </table><br><br>
        <table class="nato">
        <thead>
          <tr>
              <td width="60"></td>
              <td colspan="" width="300"><strong>Dili, <?= date('Y-M-d')?></strong></td>
              <td colspan="1"><strong>Dili, <?= date('Y-M-d')?></strong></td>
            </tr>
            <tr>
                <td width="60" style="margin-right:4;"></td>
                <td colspan="" width="300" style="margin-right:4">Prepara Husi</td>
            <td colspan="1" align="center">Aprova Husi</td>
          </tr>
        </thead>

      </table><br><br><br><br> 
        <table class="soares">
        <thead>
          <tr>
            <td width="60"></td>
              <td colspan="" width="275"><u><?= helperDiresaun()->naran_kompleto_diresaun ?></u></td>
              <?php foreach ($diretor as $key => $value): ?>
              <td colspan><u><?= $value->naran_kompleto?></u></td>
              <?php endforeach; ?>
        </tr>
        <tr>
            <td width="60"></td>
                <td colspan="" width="259">Prepara Husi</td>
            <td colspan="1" align="center">Aprova Husi</td>
          </tr>
        </thead>
      </table>
</body>

</html