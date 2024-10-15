<?= $this->extend('TemplateDiretor/headerdiretor') ?>

<?= $this->section('title'); ?>
<title>Aumenta Dados kode_osan&mdash; Sistema</title>
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
                    <form action="<?= base_url('totalsaldoancttl/'.$totalsaldo->id_saldo)?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                     <input type="hidden" name="_method" value="PATCH">
                     <div class="form-group">
                        <label>Kode Osan *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="kode_osan" value="<?= $totalsaldo->kode_osan ?>" 
                            class="form-control phone-number <?=isset($errors['kode_osan']) ? 'is-invalid' : null ?>" 
                            placeholder="Kode Osan">
                            <div class="invalid-feedback">
                                <?=isset($errors['kode_osan']) ?  $errors['kode_osan'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Instituisaun *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="instituisaun" value="<?= $totalsaldo->instituisaun ?>"
                            class="form-control phone-number <?=isset($errors['instituisaun']) ? 'is-invalid' : null ?>" 
                            placeholder="Instituisaun">
                            <div class="invalid-feedback">
                                <?=isset($errors['instituisaun']) ?  $errors['instituisaun'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('totalsaldoancttl');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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