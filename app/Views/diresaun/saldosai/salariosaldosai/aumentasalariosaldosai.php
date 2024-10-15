<?= $this->extend('TemplateDiresaun/headerdiresaun') ?>

<?= $this->section('title'); ?>
<title><?= $show ?>&mdash; Dader</title>
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
        <?php 

            $fulan      = date('m');
            $tinan      = date('Y');
            $salario   = $fulan.$tinan;

        ?>
        <div class="row">
            <div class="col-12 col-md-12">
                <?php $errors = session()->getFlashdata('errors'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4><?= $show;?></h4>
                    </div>
                    <?php if (helperDiresaun()->aktivo_servisu == 1) { ?>
                    <div class="card-body">
                    <form action="<?= base_url('salariodiresaunancttl')?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                        <div class="form-group">
                        <label for="data_salario">Naran Kompleto *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                                <select name="naran_salario" id="naran_salario" class="form-control <?=isset($errors['naran_salario']) ? 'is-invalid' : null ?>">
                                    <option value="">Hili Naran Kompleto</option>
                                    <?php foreach($diresaun as $sistema): ?>
                                    <option value="<?= $sistema->id_diresaun?>" <?= old('id_diresaun') ==
                                     $sistema->id_diresaun ? 
                                    'selected' : null ?>><?= $sistema->naran_kompleto_diresaun ?></option>
                                    <?php  endforeach;  ?>
                                </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['naran_salario']) ?  $errors['naran_salario'] : null ?>
                            </div>
                        </div>
                        </div>
                         <div class="form-group">
                        <label for="saldo_ancttl">Instituisaun *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                                <select name="saldo_ancttl" id="saldo_ancttl" class="form-control <?=isset($errors['saldo_ancttl']) ? 'is-invalid' : null ?>">
                                    <option value="">Hili Instituisaun</option>
                                    <?php foreach($total as $sistema): ?>
                                    <option value="<?= $sistema->id_saldo?>" <?= old('id_saldo') ==
                                     $sistema->id_saldo ? 
                                    'selected' : null ?>><?= $sistema->instituisaun ?></option>
                                    <?php  endforeach;  ?>
                                </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['saldo_ancttl']) ?  $errors['saldo_ancttl'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="unit_saldo">Unit Saldo *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="number" name="unit_saldo" id="unit_saldo" min="1" 
                            class="form-control phone-number <?=isset($errors['unit_saldo']) ? 'is-invalid' : null ?>" 
                            placeholder="Unit Saldo" >
                            <div class="invalid-feedback">
                                <?=isset($errors['unit_saldo']) ?  $errors['unit_saldo'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="qty_saldo">Qty Saldo *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="number" name="qty_saldo" id="qty_saldo" min="1"
                            class="form-control phone-number <?=isset($errors['qty_saldo']) ? 'is-invalid' : null ?>" 
                            placeholder="Qty Saldo">
                            <div class="invalid-feedback">
                                <?=isset($errors['qty_saldo']) ?  $errors['qty_saldo'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="freq_salario">Freq Salario*</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="number" name="freq_salario" id="freq_salario" min="0"
                            class="form-control phone-number <?=isset($errors['freq_salario']) ? 'is-invalid' : null ?>" 
                            placeholder="Total Simu Salario">
                            <div class="invalid-feedback">
                                <?=isset($errors['freq_salario']) ?  $errors['freq_salario'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="data_salario">Data Salario *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="date" name="data_salario" id="data_salario" 
                            class="form-control phone-number <?=isset($errors['data_salario']) ? 'is-invalid' : null ?>" 
                            placeholder="">
                            <div class="invalid-feedback">
                                <?=isset($errors['data_salario']) ?  $errors['data_salario'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="horas_salario">Horas Salario*</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <?php
                                date_default_timezone_set("Asia/Dili");
                            ?>
                            <input type="text" name="horas_salario" id="horas_salario" value="<?= date('H:i:s'); ?>" 
                            class="form-control phone-number <?=isset($errors['data_salario']) ? 'is-invalid' : null ?>" 
                            placeholder="" readonly>
                            <div class="invalid-feedback">
                                <?=isset($errors['data_salario']) ?  $errors['data_salario'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="kode_aktivo">Kode Salario *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="kode_aktivo" id="kode_aktivo" value="<?=  $salario; ?>" 
                            class="form-control phone-number <?=isset($errors['kode_aktivo']) ? 'is-invalid' : null ?>" 
                            placeholder="" readonly>
                            <div class="invalid-feedback">
                                <?=isset($errors['kode_aktivo']) ?  $errors['kode_aktivo'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('salariodiresaunancttl');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                        </div>
                    </div>
                    </form>
                    <?php }else{?>
                        <center class="mb-4"><br><br>
                        <span class="badge bg-danger"><i class="fas fa-info-circle"></i> Data Masih Kosong,
                        Silahkan input data kehadiran Pada  bulan dan tahun yang anda pilih</span>
                        </center>
                    <?php }?>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
    