<?= $this->extend('TemplateDiresaun/headerdiresaun') ?>

<?= $this->section('title'); ?>
<title>Aumenta Dados&mdash; Registrasaun</title>
<?= $this->endSection();?>
<?= $this->section('content') ?>
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
                <?php $errors = session()->getFlashdata('errors'); ?>
                <div class="card">
                    <div class="card-header">
                    <h4><?= $show;?></h4>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('profilediresaun/trokapassword')?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                     <!-- <input type="hidden" name="_method" value="PATCH"> -->
                      <input type="hidden" name="id_diresaun" id="" value="<?= helperDiresaun()->id_diresaun?>">
                         <div class="form-group">
                            <label for="password">Password *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <input type="password" name="password" id="password" 
                                class="form-control phone-number <?=isset($errors['password']) ? 'is-invalid' : null ?>" 
                                placeholder="Password">
                                <div class="invalid-feedback">
                                    <?=isset($errors['password']) ?  $errors['password'] : null ?>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="confpassword">Confirmasaun Password *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <input type="password" name="confpassword" id="confpassword" 
                                class="form-control phone-number <?=isset($errors['confpassword']) ? 'is-invalid' : null ?>" 
                                placeholder="Confirmasaun Password">
                                <div class="invalid-feedback">
                                    <?=isset($errors['confpassword']) ?  $errors['confpassword'] : null ?>
                                </div>
                            </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3" title="Troka Password Diretor"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('akunancttl');?>" title="Fila Fali Ba Akun Diresaun" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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