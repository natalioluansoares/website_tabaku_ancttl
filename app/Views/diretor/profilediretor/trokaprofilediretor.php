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
                    <form action="<?= base_url('profilediretor/'.$profile->id_profile)?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                     <input type="hidden" name="_method" value="PATCH">
                     <div class="form-group">
                        <label><h6>Lian *</h6></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <select name="lingua_profile" id="lingua_profile" class="form-control 
                            <?=isset($errors['lingua_profile']) ? 'is-invalid' : null ?>" >
                            <option value="<?=$profile->lingua_profile ?>"><?=$profile->lingua_profile ?></option>
                                <option value="">Hili Lian</option>
                                <option value="Tetum">Tetum</option>
                                <option value="Portuguesa">Portuguesa</option>
                                <option value="English">English</option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['lingua_profile']) ?  $errors['lingua_profile'] : null ?>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="regulamento_sistema"><h6>Naran Diretor*</h6></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <select name="id_profile_diretor" id="id_profile_diretor" class="form-control <?=isset($errors['id_profile_diretor']) ? 'is-invalid' : null ?>">
                                <option value="<?=$profile->id_profile_diretor ?>"><?=$profile->naran_kompleto ?></option>
                                <?php foreach($diretor as $sistema): ?>
                                <option value="<?= $sistema->id_diretor ?>" <?= old('id_profile_diretor') ==
                                $sistema->id_diretor ? 
                                'selected' : null ?>><?= $sistema->naran_kompleto ?></option>
                                <?php  endforeach;  ?>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['id_profile_diretor']) ?  $errors['id_profile_diretor'] : null ?>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label> <h6>Data Profile<sub class="text-danger">(Fatin, Dia Mes Ano)</sub>*</h6></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="data_profile" value="<?=$profile->data_profile ?>" 
                            class="form-control phone-number <?=isset($errors['data_profile']) ? 'is-invalid' : null ?>" 
                            placeholder="Data Profile">
                            <div class="invalid-feedback">
                                <?=isset($errors['data_profile']) ?  $errors['data_profile'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label><h6>Profile *</h6></label>
                        <div class="input-group">
                            <textarea name="profile"
                            class="form-control phone-number <?=isset($errors['profile']) ? 'is-invalid' : null ?>" 
                            placeholder="Profile" cols="30" rows="10"><?=$profile->profile ?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['profile']) ?  $errors['profile'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('profilediretor/'.$profile->lingua_profile);?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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
      CKEDITOR.replace('profile');
    </script>
<?= $this->endSection() ?>