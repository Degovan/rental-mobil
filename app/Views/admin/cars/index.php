
   <?= $this->extend('layout/app') ?>
   
   <?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Car</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-5">
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal3">
        Tambah
    </button>
    <!-- modal -->
    <?= $this->include('admin/cars/utilities/modal-add') ;?>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

