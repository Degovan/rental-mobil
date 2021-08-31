<?= $this->extend('layout/app') ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Biaya</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end mb-4">
                    <a href="<?= route_to('price.create') ?>" class="btn btn-success text-white">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="prices-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mobil</th>
                                <th>Waktu</th>
                                <th>Tarif</th>
                                <th>Honor</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $loop = 1;
                            foreach ($prices as $price) : ?>
                                <tr>
                                    <td><?= $loop ?></td>
                                    <td>
                                        <?= model('App\Models\CarModel')->find($price->car_id)->name ?>
                                    </td>
                                    <td><?= $price->hours ?> jam</td>
                                    <td><?= $price->price ?></td>
                                    <td><?= $price->honour ?></td>
                                    <td class="d-flex">
                                        <a href="<?= route_to('price.edit', $price->id) ?>" class="btn btn-sm btn-success text-white me-1"><i class="fa fa-pencil-alt"></i></a>
                                        <form action="<?= route_to('price.destroy', $price->id) ?>" method="post">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="submit" class="btn btn-sm btn-danger text-white"><i class="fa fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php $loop++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#prices-table').DataTable();
</script>
<?= $this->endSection() ?>
