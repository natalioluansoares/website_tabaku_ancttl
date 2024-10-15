
<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title><?=$show ?>&mdash; Diresaun</title>
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
		        <div class="alert alert-info"><?= $show ?> 
                    <span class="font-weight-bold mr-2"></span>
	            </div>
                 
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $show ?> 
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark"  style="height: 200px; width: 40%; overflow-y: scroll;">
                        <?php foreach($regulamento as $sistema): ?>
                            <li><a class="dropdown-item" href="<?= base_url('diretorprojectancttl/detail/'.$sistema->id_regulamento)?>"><?= $sistema->regulamento?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection() ?>