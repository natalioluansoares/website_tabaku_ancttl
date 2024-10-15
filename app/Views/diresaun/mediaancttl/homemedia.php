
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
		        <div class="alert alert-info">Buka Naran Absensi Diresaun ANCTL-TL 
                    <span class="font-weight-bold mr-2"></span>
	            </div>
                 
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hili Lian Nebe Mak Ita Boot Komprende
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark"  style="height: 200px; width: 20%; overflow-y: scroll;">
                            <li><a class="dropdown-item" href="<?= base_url('mediaancttl/Tetum')?>">Media Tetum</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('mediaancttl/Portuguesa')?>">Media Portuguesa</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('mediaancttl/English')?>">Media English</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('mediaancttl/Indonesia')?>">Media Indonesia</a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>