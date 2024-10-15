<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title><?=$show ?>&mdash; ANCT-TL</title>
<?= $this->endSection();?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Error !</b>
                    <?= session()->getFlashdata('error') ?>
                </div>
            </div>
        <?php endif; ?>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12">
                <?php $errors = session()->getFlashdata('errors'); ?>
                <div class="card">
                    <div class="card-header">
                    <h4><?= $show;?></h4>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('diretorelatorionarativa/troka_narativa')?>" method="post" autocomplete="off" enctype="multipart/form-data">
                     <?= csrf_field(); ?>
                     <input type="hidden" name="id_narativa" class="form-control" value="<?=$narativa->id_narativa?>">
                     <div class="form-group">
                            <label for="regulamento_sistema">Regulamento Sistema *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <select name="regulamento_diresaun" id="regulamento_diresaun" class="form-control <?=isset($errors['regulamento_diresaun']) ? 'is-invalid' : null ?>">
                                    <option value="<?= $narativa->diresaun_narativa?>"><?= $narativa->regulamento?></option>
                                    <?php foreach($regulamento as $sistema): ?>
                                    <option value="<?= $sistema->id_regulamento ?>" <?= old('id_regulamento') ==
                                     $sistema->id_regulamento ? 
                                    'selected' : null ?>><?= $sistema->regulamento ?></option>
                                    <?php  endforeach;  ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?=isset($errors['regulamento_diresaun']) ?  $errors['regulamento_diresaun'] : null ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kode_narativa"><h6>Kode The Union *</h6></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <select name="kode_narativa" id="kode_narativa" class="form-control <?=isset($errors['kode_narativa']) ? 'is-invalid' : null ?>">
                                    <?php if ($narativa->kode_narativa == 60) {?>
                                        <option value="<?=$narativa->kode_narativa ?>">Kode Relatorio Narativa  60 %</option>
                                        <option value="">Hili Kode Relatorio Narativa</option>
                                        <option value="60" <?= old('kode_narativa') ==
                                        'kode_narativa' ? 'selected' : null ?>>Kode Relatorio Narativa  60 %</option>
                                        <option value="40" <?= old('kode_narativa') ==
                                        'kode_narativa' ? 'selected' : null ?>>Kode Relatorio Narativa  40 %</option>
                                    <?php }else {?>
                                        <option value="<?=$narativa->kode_narativa ?>">Kode Relatorio Narativa  40 %</option>
                                        <option value="">Hili Kode Relatorio Narativa</option>
                                        <option value="60" <?= old('kode_narativa') ==
                                        'kode_narativa' ? 'selected' : null ?>>Kode Relatorio Narativa  60 %</option>
                                        <option value="40" <?= old('kode_narativa') ==
                                        'kode_narativa' ? 'selected' : null ?>>Kode Relatorio Narativa  40 %</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?=isset($errors['kode_narativa']) ?  $errors['kode_narativa'] : null ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="topiko_narativa"><h6>Topiko*</h6></label>
                        <div class="input-group">
                            <textarea name="topiko_narativa" id="" placeholder="Topiko Narativa" class="form-control phone-number 
                            <?=isset($errors['topiko_narativa']) ? 'is-invalid' : null ?>" 
                            value=""  rows="3"><?= $narativa->topiko_narativa?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['topiko_narativa']) ?  $errors['topiko_narativa'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="conteudo_narativa"><h6>Konteudo*</h6></label>
                        <div class="input-group">
                            <textarea name="conteudo_narativa" id="" placeholder="Titulo Projeito" class="form-control phone-number 
                            <?=isset($errors['conteudo_narativa']) ? 'is-invalid' : null ?>"
                             value=""  rows="3"><?= $narativa->conteudo_narativa?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['conteudo_narativa']) ?  $errors['conteudo_narativa'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="file"><h6>File (<sub class="text-danger">PDF</sub> )*</h6></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <input type="file" name="file" id="" value="" 
                                class="form-control phone-number <?=isset($errors['file']) ? 'is-invalid' : null ?>" 
                                placeholder="">
                                <div class="invalid-feedback">
                                    <?=isset($errors['file']) ?  $errors['file'] : null ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="data"><h6>Data *</h6></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="date" name="data" id="" value="<?= $narativa->data?>" 
                            class="form-control phone-number <?=isset($errors['data']) ? 'is-invalid' : null ?>" 
                            placeholder="">
                            <div class="invalid-feedback">
                                <?=isset($errors['data']) ?  $errors['data'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="horas"><h6>Horas *</h6></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <?php
                                date_default_timezone_set("Asia/Dili");
                            ?>
                            <input type="text" name="horas" id="horas" value="<?= date('H:i:s'); ?>" 
                            class="form-control phone-number <?=isset($errors['horas']) ? 'is-invalid' : null ?>" 
                            placeholder="" readonly>
                            <div class="invalid-feedback">
                                <?=isset($errors['horas']) ?  $errors['horas'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('diretorelatorionarativa/detail/'.$narativa->diresaun_narativa);?>"
                         class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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
    <script>
      CKEDITOR.replace('topiko_narativa');
      CKEDITOR.replace('conteudo_narativa');
    </script>
<?= $this->endSection() ?>