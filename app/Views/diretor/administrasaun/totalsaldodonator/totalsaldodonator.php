<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title>Total Saldo&mdash; ANCT-TL</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Success !</b>
                    <?= session()->getFlashdata('success') ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Error !</b>
                    <?= session()->getFlashdata('error') ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                <h4><?= $show;?></h4>
                </div>
                <div class="card-body">
                    <a href="<?= site_url('totalsaldodonator/new');?>" class="btn btn-dark mb-3" title="Hare Dados Ne'e Mak Hamos Temporario"><i class="fa fa-regular fa-eraser"></i></a>
                <div class="table-responsive">
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Instituisaun </th>
                        <th>Saldo</th>
                        <th>Diresaun</th>
                        <th>Total Saldo</th>
                        <th>Data <sub>(Horas)</sub></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $saldo = 0;
                    $total = 0;
                    $no=1; foreach($donator as $osan):
                     ?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $osan->instituisaun_donator ?></td>
                            <td>$ <?= number_format($osan->saldo_tama_donator, 2) ?></td>
                            <td><?= $osan->naran_kompleto_diresaun?></td>
                            <td>$ <?= number_format($osan->total_saldo,2)?></td>
                            <td><?= $osan->data_osan_tama_donator?><sub>(<?= $osan->horas_osan_tama_donator	 ?>)</sub></td>

                        </tr>
                    <?php
                    $saldo += $osan->saldo_tama_donator; 
                    $total = $osan->total_saldo; 
                    endforeach; 
                    ?>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan="2"><h6>Total Osan</h6></td>
                            <td title="$ <?= number_format($saldo, 2)?>" colspan="1"><strong>$ <?= number_format($saldo, 2)?></strong></td>
                            <td title="$ <?= number_format($total, 2)?>"><strong>$ <?= number_format($total, 2)?></strong></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection();?>