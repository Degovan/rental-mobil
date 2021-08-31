<?= $this->extend('layout/app') ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="<?= route_to('price') ?>">Biaya</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <form action="<?= route_to('price.edit', $price->id) ?>" method="post">
                    <?= $this->include('admin/prices/components/form') ?>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
