<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title><?=$show ?>&mdash; Sistema</title>
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
                    <form action="<?= base_url('profilediresaundiretor')?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label><h6>Lian *</h6></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <select name="lingua_profile_diresaun" id="lingua_profile_diresaun" class="form-control 
                            <?=isset($errors['lingua_profile_diresaun']) ? 'is-invalid' : null ?>" >
                                <option value="">Hili Lian</option>
                                <option value="Tetum">Tetum</option>
                                <option value="Portuguesa">Portuguesa</option>
                                <option value="English">English</option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['lingua_profile_diresaun']) ?  $errors['lingua_profile_diresaun'] : null ?>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="regulamento_sistema"><h6>Naran Diresaun*</h6></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <select name="id_profile_diresaun_ancttl" id="id_profile_diresaun_ancttl" class="form-control <?=isset($errors['id_profile_diresaun_ancttl']) ? 'is-invalid' : null ?>">
                                <option value="">Hili Naran Diresaun</option>
                                <?php foreach($diresaun as $sistema): ?>
                                <option value="<?= $sistema->id_diresaun ?>" <?= old('id_profile_diresaun_ancttl') ==
                                $sistema->id_diresaun ? 
                                'selected' : null ?>><?= $sistema->naran_kompleto_diresaun ?></option>
                                <?php  endforeach;  ?>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['id_profile_diresaun_ancttl']) ?  $errors['id_profile_diresaun_ancttl'] : null ?>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label> <h6>Data Profile Diresaun<sub class="text-danger">(Fatin, Dia Mes Ano)</sub>*</h6></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="data_profile_diresaun" value="<?= old('data_profile_diresaun')?>" 
                            class="form-control phone-number <?=isset($errors['data_profile_diresaun']) ? 'is-invalid' : null ?>" 
                            placeholder="Data Profile">
                            <div class="invalid-feedback">
                                <?=isset($errors['data_profile_diresaun']) ?  $errors['data_profile_diresaun'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label><h6>Profile *</h6></label>
                        <div class="input-group">
                            <textarea name="profile_diresaun"
                            class="form-control phone-number <?=isset($errors['profile_diresaun']) ? 'is-invalid' : null ?>" 
                            placeholder="Profile" cols="30" rows="10"><?= old('profile_diresaun')?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['profile_diresaun']) ?  $errors['profile_diresaun'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('akundiretor');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <script src="<?= base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/ckeditores/ckeditor/ckeditor.js"></script>
    <!-- <script src="<?= base_url(); ?>template/assets/ckfinder/ckfinder.js"></script> -->
    <script>
      CKEDITOR.replace('profile_diresaun');
    </script>
<?= $this->endSection() ?>