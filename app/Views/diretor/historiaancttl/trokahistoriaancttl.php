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
                    <form action="<?= base_url('historiaancttl/'.$historia->id_historia)?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                     <input type="hidden" name="_method" value="PATCH">
                     <div class="form-group">
                        <label><h6>Lian *</h6></label>
                        <div class="input-group">
                            <select name="lingua_historia" id="lingua_historia" class="form-control 
                            <?=isset($errors['lingua_historia']) ? 'is-invalid' : null ?>" >
                                <option value="<?= $historia->lingua_historia?>">
                                <?= $historia->lingua_historia?></option>
                                <option value="">Hili Lian</option>
                                <option value="Tetum">Tetum</option>
                                <option value="Portuguesa">Portuguesa</option>
                                <option value="English">English</option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['lingua_historia']) ?  $errors['lingua_historia'] : null ?>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label><h6>historia *</h6></label>
                        <div class="input-group">
                            <textarea name="historia"
                            class="form-control phone-number <?=isset($errors['historia']) ? 'is-invalid' : null ?>" 
                            placeholder="historia" cols="30" rows="10"><?= $historia->historia?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['historia']) ?  $errors['historia'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('historiaancttl/lingua/'.$historia->lingua_historia);?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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
      CKEDITOR.replace('historia');
    </script>
<?= $this->endSection() ?>