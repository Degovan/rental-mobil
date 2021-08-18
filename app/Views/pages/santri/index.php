<?= $this->extend('layout/app') ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Santri</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
