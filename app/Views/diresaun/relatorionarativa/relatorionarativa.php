<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
<?= $this->section('title'); ?>
<title>Dados Media&mdash; ANCT-TL</title>
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
                 
                    <?php if (helperDiresaun()->regulamento_diresaun ==2) { ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $show ?> 40 %
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark"  style="height: 200px; width: 80%; overflow-y: scroll;">
                                <?php foreach($regulamento as $sistema): ?>
                                    <li><a class="dropdown-item" href="<?= base_url('relatorionarativa/relatorionarativaadministrasaun/40/'
                                    .$sistema->id_regulamento)?>"><?= $sistema->regulamento?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $show ?> 60 %
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark"  style="height: 200px; width: 80%; overflow-y: scroll;">
                                <?php foreach($regulamento as $sistema): ?>
                                    <li><a class="dropdown-item" href="<?= base_url('relatorionarativa/relatorionarativaadministrasaun/60/'
                                    .$sistema->id_regulamento)?>"><?= $sistema->regulamento?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <?php }else {?>
                        <div class="row">
                        <div class="col-lg-6">
                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $show ?> 40 %
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark"  style="height: 50px; width: 80%; overflow-y: scroll;">
                                    <li><a class="dropdown-item" 
                                    href="<?= base_url('relatorionarativa/relatorionarativaancttl/40')?>"><?= helperDiresaun()->regulamento?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $show ?> 60 %
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark"  style="height: 50px; width: 80%; overflow-y: scroll;">
                                    <li><a class="dropdown-item" href="<?= base_url('relatorionarativa/relatorionarativaancttl/60') ?>"><?= helperDiresaun()->regulamento?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    
                </div>
            </div>
        </div>
</section>
<?= $this->endSection();?>