<?= $this->extend('layout/app') ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="/santri">Data Santri</a></li>
<li class="breadcrumb-item active" aria-current="page">Tambah</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form</h5>
                <form action="<?= route_to('santri') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-floating mb-3">
                        <input type="number" name="registration_number" id="registration" class="form-control <?= ($errors['registration_number'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="registration">Nomor Induk</label>
                        <div class="invalid-feedback">
                            <?= $errors['registration_number'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="fullname" id="fullname" class="form-control <?= ($errors['fullname'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="fullname">Nama Lengkap</label>
                        <div class="invalid-feedback">
                            <?= $errors['fullname'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="born_place" id="born_place" class="form-control <?= ($errors['born_place'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="born_place">Tempat Lahir</label>
                        <div class="invalid-feedback">
                            <?= $errors['born_place'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="born_date" id="born_date" class="form-control <?= ($errors['born_date'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="born_date">Tanggal Lahir</label>
                        <div class="invalid-feedback">
                            <?= $errors['born_date'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="domicile_block" id="domicile_block" class="form-control <?= ($errors['domicile_block'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="domicile_block">Blok Domisili</label>
                        <div class="invalid-feedback">
                            <?= $errors['domicile_block'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="educational_institute" id="educational_institute" class="form-control <?= ($errors['educational_institute'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="educational_institute">Lembaga Pendidikan</label>
                        <div class="invalid-feedback">
                            <?= $errors['educational_institute'] ?? '' ?>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <a href="<?= route_to('santri') ?>" class="btn btn-danger text-white"><i class="fa fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Import Excel</h5>

                <form action="<?= route_to('santri.excel') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="form-floating mb-3">
                        <input type="file" name="excel" id="excel" class="form-control <?= ($errors['excel'] ?? null) ? 'is-invalid' : '' ?>" accept=".xlsx,.xsl">
                        <div class="invalid-feedback">
                            <?= $errors['excel'] ?? '' ?>
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-download"></i> Import
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
