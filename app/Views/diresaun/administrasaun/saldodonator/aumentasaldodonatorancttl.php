<?= $this->extend('TemplateDiresaun/headerdiresaun') ?>

<?= $this->section('title'); ?>
<title><?= $show?>&mdash; Dader</title>
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
                    <?php if (helperDiresaun()->aktivo_servisu == 1) { ?>
                    <div class="card-body">
                    <form action="<?= base_url('saldodonatorancttl/ancttl')?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="naran_apoia">Naran Apoia Saldo *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="naran_apoia" id="" min="0"
                            value="<?= old('naran_apoia')?>" 
                            class="form-control phone-number <?=isset($errors['naran_apoia']) ? 'is-invalid' : null ?>" 
                            placeholder="Naran Apoia Saldo">
                            <div class="invalid-feedback">
                                <?=isset($errors['naran_apoia']) ?  $errors['naran_apoia'] : null ?>
                            </div>
                        </div>
                        </div>
                     <div class="form-group">
                        <label for="descripsaun_apoia">Descripsaun *</label>
                        <div class="input-group">
                            <textarea name="descripsaun_apoia" value="<?= old('descripsaun_apoia')?>" 
                            class="form-control phone-number <?=isset($errors['descripsaun_apoia']) ? 'is-invalid' : null ?>" 
                            placeholder="Naran Apoia Saldo"></textarea>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="total_saldo_donator">Instituisaun *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <select name="total_saldo_donator" id="total_saldo_donator" class="form-control phone-number 
                            <?=isset($errors['total_saldo_donator']) ? 'is-invalid' : null ?>" >
                                <option value="">Hili Instituisaun</option>
                                <?php foreach($saldo as $sistema): ?>
                            <option value="<?= $sistema->id_saldo ?>" <?= old('id_saldo') ==
                                     $sistema->id_saldo ? 
                                    'selected' : null ?>><?= $sistema->instituisaun ?></option>
                                <?php endforeach;?>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['total_saldo_donator']) ?  $errors['total_saldo_donator'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="saldo_tama_donator">Total Osan Tama *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="number" name="saldo_tama_donator" id="saldo_tama_donator" min="0"
                            value="<?= old('saldo_tama_donator')?>" 
                            class="form-control phone-number <?=isset($errors['saldo_tama_donator']) ? 'is-invalid' : null ?>" 
                            placeholder="Total Osan Tama">
                            <div class="invalid-feedback">
                                <?=isset($errors['saldo_tama_donator']) ?  $errors['saldo_tama_donator'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="data_osan_tama_donator">Data Osan Tama *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="date" name="data_osan_tama_donator" id="data_osan_tama_donator" value="<?= date('Y-m-d')?>" 
                            class="form-control phone-number <?=isset($errors['data_osan_tama_donator']) ? 'is-invalid' : null ?>" 
                            placeholder="Data Osan Tama">
                            <div class="invalid-feedback">
                                <?=isset($errors['data_osan_tama_donator']) ?  $errors['data_osan_tama_donator'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="horas_osan_tama_donator">Horas Osan Tama *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <?php
                                date_default_timezone_set("Asia/Dili");
                            ?>
                            <input type="text" name="horas_osan_tama_donator" id="horas_osan_tama_donator" value="<?= date('H:i:s'); ?>" 
                            class="form-control phone-number <?=isset($errors['horas_osan_tama_donator']) ? 'is-invalid' : null ?>" 
                            placeholder="" readonly>
                            <div class="invalid-feedback">
                                <?=isset($errors['horas_osan_tama_donator']) ?  $errors['horas_osan_tama_donator'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('saldodonatorancttl');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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
    <script src="<?= base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/ckeditores/ckeditor/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('descripsaun_apoia');
    </script>
<?= $this->endSection() ?>