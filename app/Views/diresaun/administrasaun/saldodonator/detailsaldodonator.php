
<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
<?= $this->section('title'); ?>
<title>Hare Absensi&mdash; Diresaun</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                <h4><?= $show;?></h4>
                </div>
                <div class="card-body">
                    <div class="card mb-3">
                        <div class="alert alert-info">Osan Apoia Husi Donator 
                            <span class="font-weight-bold mr-2"></span>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hili Hodi Hare Osan Ne'ebe Mak Donator Apoia
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark"  style="height: 100px; width: 50%; overflow-y: scroll;">
                            <?php foreach($saldo as $total): ?>
                                <li><a class="dropdown-item" href="<?= base_url('saldodonatorancttl/'.$total->id_saldo)?>">
                                <?= $total->instituisaun?>
                                </a></li>
                            </a></li>
                            <?php endforeach;?>
                            <li><a class="dropdown-item" href="<?= base_url('saldodonatorancttl/ancttl/'.$aliansa->id_saldo)?>">
                            <?= $aliansa->instituisaun?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection() ?>