<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
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
                    <form action="<?= base_url('cartadiretor/'.$carta->id_carta)?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                     <input type="hidden" name="_method" value="PATCH">
                     <div class="form-group">
                        <label><h6>Lian *</h6></label>
                        <div class="input-group">
                            <select name="lingua" id="lingua" class="form-control 
                            <?=isset($errors['lingua']) ? 'is-invalid' : null ?>" >
                                <option value="<?= $carta->lingua?>">
                                <?= $carta->lingua?></option>
                                <option value="">Hili Lian</option>
                                <option value="Tetum">Tetum</option>
                                <option value="Portuguesa">Portuguesa</option>
                                <option value="English">English</option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['lingua']) ?  $errors['lingua'] : null ?>
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
                            <select name="profisaun" id="profisaun" class="form-control <?=isset($errors['profisaun']) ? 'is-invalid' : null ?>">
                                <option value="<?= $carta->profisaun?>"><?= $carta->naran_kompleto?></option>
                                <?php foreach($diretor as $sistema): ?>
                                <option value="<?= $sistema->id_diretor ?>" <?= old('profisaun') ==
                                $sistema->id_diretor ? 
                                'selected' : null ?>><?= $sistema->naran_kompleto ?></option>
                                <?php  endforeach;  ?>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['profisaun']) ?  $errors['profisaun'] : null ?>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label> <h6>Data Carta <sub class="text-danger">(Fatin, Dia Mes Ano)</sub>*</h6></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="data_carta" value="<?= $carta->data_carta?>" 
                            class="form-control phone-number <?=isset($errors['data_carta']) ? 'is-invalid' : null ?>" 
                            placeholder="Data Carta">
                            <div class="invalid-feedback">
                                <?=isset($errors['data_carta']) ?  $errors['data_carta'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label><h6>Data Periode <sub class="text-danger">(2023 - 2028)</sub>*</h6></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="periode_carta" value="<?= $carta->periode_carta?>" 
                            class="form-control phone-number <?=isset($errors['periode_carta']) ? 'is-invalid' : null ?>" 
                            placeholder="Periode Carta">
                            <div class="invalid-feedback">
                                <?=isset($errors['periode_carta']) ?  $errors['periode_carta'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label><h6>Carta Diretor*</h6></label>
                        <div class="input-group">
                            <textarea name="carta"
                            class="form-control phone-number <?=isset($errors['carta']) ? 'is-invalid' : null ?>" 
                            placeholder="Carta Diretor" cols="30" rows="10"><?= old('carta')?><?= $carta->carta?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['carta']) ?  $errors['carta'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('cartadiretor/lingua/'.$carta->carta);?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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
      CKEDITOR.replace('carta');
    </script>
<?= $this->endSection() ?>