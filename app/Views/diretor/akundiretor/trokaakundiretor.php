<?= $this->extend('TemplateDiretor/headerdiretor') ?>

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
                    <form action="<?= base_url('akundiretor/diretor')?>" method="post" autocomplete="off" enctype="multipart/form-data">
                     <?= csrf_field(); ?>
                     <input type="hidden" name="id_diretor" value="<?= $akun->id_diretor?>">
                     <div class="form-group">
                            <label for="regulamento_sistema">Regulamento Sistema *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <select name="regulamento" id="regulamento_diresaun" class="form-control <?=isset($errors['regulamento_diresaun']) ? 'is-invalid' : null ?>">
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
                            <label for="naran_kompleto_diresaun">Naran Kompleto *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <input type="text" name="naran_kompleto" value="<?=$akun->naran_kompleto ?>" 
                                class="form-control phone-number <?=isset($errors['naran_kompleto_diresaun']) ? 'is-invalid' : null ?>" 
                                placeholder="Naran Kompleto">
                                <div class="invalid-feedback">
                                    <?=isset($errors['naran_kompleto_diresaun']) ?  $errors['naran_kompleto_diresaun'] : null ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sexo">Sexo *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <select name="sexo" id="sexo" class="form-control <?=isset($errors['sexo']) ? 'is-invalid' : null ?>">
                                    <option value="<?=$akun->sexo ?>"><?=$akun->sexo ?></option>
                                    <option value="Mane"<?= old('sexo') == 'Mane' ? 'selected' : null ?>>Mane</option>
                                    <option value="Feto"<?= old('sexo') == 'Feto' ? 'selected' : null ?>>Feto</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?=isset($errors['sexo']) ?  $errors['sexo'] : null ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status_servisu">Status Servisu *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <select name="status_servisu" id="status_servisu" class="form-control <?=isset($errors['status_servisu']) ? 'is-invalid' : null ?>">
                                    <option value="<?=$akun->status_servisu ?>"><?=$akun->status_servisu ?></option>
                                    <option value="Aktivo"<?= old('status_servisu') == 'Aktivo' ? 'selected' : null ?>>Aktivo</option>
                                    <option value="La Aktivo"<?= old('status_servisu') == 'La Aktivo' ? 'selected' : null ?>>La Aktivo</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?=isset($errors['status_servisu']) ?  $errors['status_servisu'] : null ?>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="fatin_moris">Fatin Moris *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <input type="text" name="fatin_moris" id="fatin_moris" value="<?= $akun->fatin_moris?>" 
                                class="form-control phone-number <?=isset($errors['fatin_moris']) ? 'is-invalid' : null ?>" 
                                placeholder="Fatin Moris">
                                <div class="invalid-feedback">
                                    <?=isset($errors['fatin_moris']) ?  $errors['fatin_moris'] : null ?>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="loron_moris">Loron Moris *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <input type="date" name="loron_moris" id="loron_moris" value="<?= $akun->loron_moris?>" 
                                class="form-control phone-number <?=isset($errors['loron_moris']) ? 'is-invalid' : null ?>" 
                                placeholder="Fatin Moris">
                                <div class="invalid-feedback">
                                    <?=isset($errors['loron_moris']) ?  $errors['loron_moris'] : null ?>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="email">Email *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <input type="email" name="email" id="numero_eleitural" value="<?= $akun->email?>" 
                                class="form-control phone-number <?=isset($errors['email']) ? 'is-invalid' : null ?>" 
                                placeholder="Email">
                                <div class="invalid-feedback">
                                    <?=isset($errors['email']) ?  $errors['email'] : null ?>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="numero_eleitural">Numero Eleitural *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <input type="number" name="numero_eleitural" id="numero_eleitural" value="<?=$akun->numero_eleitural?>" 
                                class="form-control phone-number <?=isset($errors['numero_eleitural']) ? 'is-invalid' : null ?>" 
                                placeholder="Numero Eleitural">
                                <div class="invalid-feedback">
                                    <?=isset($errors['numero_eleitural']) ?  $errors['numero_eleitural'] : null ?>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="numero_whatsapp">Numero Whatsapp *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <input type="text" name="numero_whatsapp" id="numero_whatsapp" value="<?= $akun->numero_whatsapp?>" 
                                class="form-control phone-number <?=isset($errors['numero_whatsapp']) ? 'is-invalid' : null ?>" 
                                placeholder="Numero Whatsapp">
                                <div class="invalid-feedback">
                                    <?=isset($errors['numero_whatsapp']) ?  $errors['numero_whatsapp'] : null ?>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="numero_whatsapp">Foto Diretor *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                </div>
                                <input type="file" name="foto_diretor" id="numero_whatsapp" value="" 
                                class="form-control phone-number <?=isset($errors['foto_diretor']) ? 'is-invalid' : null ?>" 
                                placeholder="">
                                <div class="invalid-feedback">
                                    <?=isset($errors['foto_diretor']) ?  $errors['foto_diretor'] : null ?>
                                </div>
                            </div><br>
                            <img alt="image" src="<?= base_url('uploads/fotodiretor/'.$akun->foto_diretor)?>" style="width: 130px;">
                        </div>
                         <button type="submit" class="btn btn-primary mb-3" title="Aumento Dados Sistema Diresaun"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('akundiretor');?>" title="Fila Fali Ba Sistema Diresaun" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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