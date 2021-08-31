<?= $this->extend('layout/app') ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="/car">Mobil</a></li>
<li class="breadcrumb-item active" aria-current="page">Tambah</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <form action="<?= route_to('car.edit', $car->id) ?>" method="post">
                    <?= $this->include('admin/cars/components/form') ?>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
