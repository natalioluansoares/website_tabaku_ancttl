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
                    <a href="<?= base_url('totalsaldodonator');?>" 
                    class="btn btn-primary mb-3" title="Fila Fali Ba Total Saldo Donator"><i class="fa fa-solid fa-backward"></i></a>
                    <form action="<?= site_url('totalsaldodonatorpermanente')?>" method="post" autocomplete="off" class="d-inline"
                        onsubmit="return confirm('Ita Boot Hakarak Hamos Hotu Dados Temporario ?')">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-secondary mb-3" title="Hamos Hotu Saldo Donator"><i class="fas fa-solid fa-trash"></i></button>
                    </form>
                <div class="table-responsive">
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Naran</th>
                        <th>Instituisaun </th>
                        <th>Sexo</th>
                        <th>Saldo</th>
                        <th>Data <sub>(Horas)</sub></th>
                        <th>Temporario</th>
                        <th>Permanente</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $saldo = 0; 
                        $no=1; foreach($donator as $osan): 
                        ?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $osan->naran_donator ?><sub class="text-danger">(<?= $osan->titulo_donator ?>)</sub></td>
                            <td><?= $osan->instituisaun_donator ?></td>
                            <td><?= $osan->sexo_donator ?></td>
                            <td><?= number_format($osan->saldo_tama_donator, 2) ?></td>
                            <td><?= $osan->data_osan_tama_donator?><sub>(<?= $osan->horas_osan_tama_donator	 ?>)</sub></td>
                            <td><a href="<?= base_url('totalsaldodonator/'.$osan->id_saldo_donator.'/edit') ?>" class="btn btn-success" title="Hamos Data Temporario"><i class="fas fa-solid fa-broom"></i></a></td>
                            <form action="<?= site_url('totalsaldodonatorpermanente/'.$osan->id_saldo_donator)?>" method="post" autocomplete="off" 
                            onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                            <input type="hidden" name="_method" value="DELETE">
                                <?= csrf_field(); ?>
                                <td><button class="btn btn-danger" title="Hamos Data Permanente"><i class="fas fa-solid fa-trash"></i></button></td>
                            </form>
                        </tr>
                    <?php 
                    $saldo += $osan->saldo_tama_donator;
                    endforeach; 
                    ?>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan="4"><h6>Total Osan</h6></td>
                            <td title="$ <?= number_format($saldo, 2) ?>"><strong>$ <?= number_format($saldo, 2) ?></strong></td>
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