<?= $this->extend('TemplateDiresaun/headerdiresaun') ?>

<?= $this->section('title'); ?>
<title>Aumenta Dados Media&mdash; ANCT-TL</title>
<?= $this->endSection();?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
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
                    <form action="<?= base_url('projectancttl/troka_projeito')?>" method="post" autocomplete="off" enctype="multipart/form-data">
                     <?= csrf_field(); ?>
                     <input type="hidden" name="id_projeito" value="<?= $project->id_projeito?>">
                     <!-- <input type="hidden" name="_method" value="PATCH"> -->
                      <?php if (helperDiresaun()->regulamento_diresaun == 2) {?>
                            <div class="form-group">
                                <label for="regulamento_sistema"><h6>Regulamento Sistema *</h6></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-paper-plane"></i>
                                    </div>
                                    </div>
                                    <select name="diresaun" id="diresaun" class="form-control <?=isset($errors['diresaun']) ? 'is-invalid' : null ?>">
                                        <option value="">Hili Regulamento Sistema</option>
                                        <?php foreach($regulamento as $sistema): ?>
                                        <option value="<?= $sistema->id_regulamento ?>" <?= old('diresaun') ==
                                        $sistema->id_regulamento ? 
                                        'selected' : null ?>><?= $sistema->regulamento ?></option>
                                        <?php  endforeach;  ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?=isset($errors['diresaun']) ?  $errors['diresaun'] : null ?>
                                    </div>
                                </div>
                            </div>
                        <?php }else{ ?>
                            <div class="form-group">
                                <label for="regulamento_sistema"><h6>Regulamento Sistema *</h6></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-paper-plane"></i>
                                    </div>
                                    </div>
                                    <select name="diresaun" id="diresaun" class="form-control <?=isset($errors['diresaun']) ? 'is-invalid' : null ?>">
                                        <option value="">Hili Regulamento Sistema</option>
                                        
                                        <option value="<?=helperDiresaun()->regulamento_diresaun ?>" <?= old('diresaun') ==
                                        helperDiresaun()->regulamento_diresaun  ? 
                                        'selected' : null ?>><?= helperDiresaun()->regulamento ?></option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?=isset($errors['diresaun']) ?  $errors['diresaun'] : null ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="form-group">
                        <label for="introdusaun"><h6>Introdusaun*</h6></label>
                        <div class="input-group">
                            <textarea name="introdusaun" id="introdusaun" placeholder="Introdusaun" class="form-control phone-number 
                            <?=isset($errors['introdusaun']) ? 'is-invalid' : null ?>" value=""  rows="3"><?= $project->introdusaun?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['introdusaun']) ?  $errors['introdusaun'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="titulo_projeito"><h6>Titulo Projeito*</h6></label>
                        <div class="input-group">
                            <textarea name="titulo_projeito" id="titulo_projeito" placeholder="Titulo Projeito" class="form-control phone-number 
                            <?=isset($errors['titulo_projeito']) ? 'is-invalid' : null ?>"
                             rows="3"><?= $project->titulo_projeito?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['titulo_projeito']) ?  $errors['titulo_projeito'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="objectivo_projeito"><h6>Objectivo Projeito *</h6></label>
                        <div class="input-group">
                            <textarea name="objectivo_projeito" id="objectivo_projeito" placeholder="Objectivo Projeito" class="form-control phone-number 
                            <?=isset($errors['objectivo_projeito']) ? 'is-invalid' : null ?>"
                            rows="3"><?= $project->objectivo_projeito?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['objectivo_projeito']) ?  $errors['objectivo_projeito'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="durasaun_projeito"><h6>Durasaun Projeito *</h6></label>
                        <div class="input-group">
                            <textarea name="durasaun_projeito" id="durasaun_projeito" placeholder="Durante Projeito" class="form-control phone-number 
                            <?=isset($errors['durasaun_projeito']) ? 'is-invalid' : null ?>"
                            rows="3"><?= $project->durasaun_projeito?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['durasaun_projeito']) ?  $errors['durasaun_projeito'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="implementasaun_projeito"><h6>Lokalidade Implementasaun Projeito *</h6></label>
                        <div class="input-group">
                            <textarea name="implementasaun_projeito" id="implementasaun_projeito" placeholder="Lokalidade Implementasaun Projeito" class="form-control phone-number 
                            <?=isset($errors['implementasaun_projeito']) ? 'is-invalid' : null ?>"
                            rows="3"><?= $project->implementasaun_projeito?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['implementasaun_projeito']) ?  $errors['implementasaun_projeito'] : null ?>
                            </div>
                        </div><br>
                        <div class="form-group">
                        <label for="benefisiariu_projeito"><h6>Benefisiariu Projeito *</h6></label>
                        <div class="input-group">
                            <textarea name="benefisiariu_projeito" id="benefisiariu_projeito" placeholder="Benefisiariu Projeito" class="form-control phone-number 
                            <?=isset($errors['benefisiariu_projeito']) ? 'is-invalid' : null ?>"
                            rows="3"><?= $project->benefisiariu_projeito?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['implementasaun_projeito']) ?  $errors['implementasaun_projeito'] : null ?>
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
                                <input type="file" name="file_project" id="" value="" 
                                class="form-control phone-number <?=isset($errors['file_project']) ? 'is-invalid' : null ?>" 
                                placeholder="">
                                <div class="invalid-feedback">
                                    <?=isset($errors['file_project']) ?  $errors['file_project'] : null ?>
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
                            <input type="date" name="created" id="" value="<?= $project->created?>" 
                            class="form-control phone-number <?=isset($errors['created']) ? 'is-invalid' : null ?>" 
                            placeholder="">
                            <div class="invalid-feedback">
                                <?=isset($errors['created']) ?  $errors['created'] : null ?>
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
                            <input type="text" name="horas_project" id="horas" value="<?= date('H:i:s'); ?>" 
                            class="form-control phone-number <?=isset($errors['horas_project']) ? 'is-invalid' : null ?>" 
                            placeholder="" readonly>
                            <div class="invalid-feedback">
                                <?=isset($errors['horas_project']) ?  $errors['horas_project'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="lian_maktaka"><h6>Lian Maktaka *</h6></label>
                        <div class="input-group">
                            <textarea name="lian_maktaka" id="lian_maktaka" placeholder="Lian Maktaka" class="form-control phone-number 
                            <?=isset($errors['lian_maktaka']) ? 'is-invalid' : null ?>"
                            rows="3"><?= $project->introdusaun?></textarea>
                            <div class="invalid-feedback">
                                <?=isset($errors['lian_maktaka']) ?  $errors['lian_maktaka'] : null ?>
                            </div>
                        </div>
                    </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                         <?php if (helperDiresaun()->regulamento_diresaun == 2) { ?>
                            <a href="<?= base_url('projectancttl/detail/'.$project->diresaun);?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                         <?php }else {?>
                            <a href="<?= base_url('projectancttl');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                        <?php } ?>
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
      CKEDITOR.replace('introdusaun');
      CKEDITOR.replace('titulo_projeito');
      CKEDITOR.replace('objectivo_projeito');
      CKEDITOR.replace('durasaun_projeito');
      CKEDITOR.replace('implementasaun_projeito');
      CKEDITOR.replace('benefisiariu_projeito');
      CKEDITOR.replace('logical_frame_work');
      CKEDITOR.replace('project_cycle_managament');
      CKEDITOR.replace('project_managament_risk');
      CKEDITOR.replace('result_based_managament');
      CKEDITOR.replace('monitoring_indereita_direita');
      CKEDITOR.replace('relatorio');
      CKEDITOR.replace('lian_maktaka');
    </script>
<?= $this->endSection() ?>