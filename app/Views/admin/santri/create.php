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
                    <?= $this->include('admin/santri/components/form') ?>
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
