<?= $this->extend('TemplateDiretor/headerdiretor') ?>

<?= $this->section('title'); ?>
<title>Aumenta Dados kode_the_union&mdash; Sistema</title>
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
                    <form action="<?= base_url('kodenarativatheunion')?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                        <div class="form-group">
                        <label>Kode The Union *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="kode_the_union" value="<?= old('kode_the_union')?>" 
                            class="form-control phone-number <?=isset($errors['kode_the_union']) ? 'is-invalid' : null ?>" 
                            placeholder="Kode The Union" autofocus>
                            <div class="invalid-feedback">
                                <?=isset($errors['kode_the_union']) ?  $errors['kode_the_union'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('kodenarativatheunion');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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