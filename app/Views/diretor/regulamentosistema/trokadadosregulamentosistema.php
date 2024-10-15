<?= $this->extend('TemplateDiretor/headerdiretor') ?>

<?= $this->section('title'); ?>
<title>Troka Dados Regulamento&mdash; Sistema</title>
<?= $this->endSection();?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12">
                <?php $errors = session()->getFlashdata('errors'); ?>
                <div class="card">
                    <div class="card-header">
                    <h4><?= $show;?></h4>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('regulamentosistema/'.$regulamento->id_regulamento)?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                     <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group">
                        <label>Acesso Sistema *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="regulamento" value="<?= $regulamento->regulamento?>" 
                            class="form-control phone-number <?=isset($errors['regulamento']) ? 'is-invalid' : null ?>" 
                            placeholder="Regulameto Sistema" autofocus>
                            <div class="invalid-feedback">
                                <?=isset($errors['regulamento']) ?  $errors['regulamento'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('regulamentosistema');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>