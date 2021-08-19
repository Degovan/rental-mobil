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
</div>
<?= $this->endSection() ?>