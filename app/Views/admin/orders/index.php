
   <?= $this->extend('layout/app') ?>
   
   <?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Order</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-5">
    <a href="<?= route_to('order.create');?>" class="btn btn-primary mb-3">Tambah</a>
    <!-- modal -->
    <?= $this->include('admin/orders/utilities/modal-add') ;?>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

