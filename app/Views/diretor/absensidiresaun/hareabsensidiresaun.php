
<?= $this->extend('TemplateDiretor/headerdiretor')?>
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
                            Absensi Diresaun ANCTL-TL
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark"  style="height: 300px; width: 50%; overflow-y: scroll;">
                        
                        <?php foreach($diresaun as $a): ?>
                            <li><a class="dropdown-item" href="<?= base_url('absensidiresaun/'.$a->id_diresaun.'/show')?>">
                            <?= $a->naran_kompleto_diresaun ?><sub class="text-danger">(<?= $a->regulamento ?>)</sub></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>