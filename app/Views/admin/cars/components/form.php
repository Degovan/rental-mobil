<?= csrf_field() ?>
<div class="form-floating mb-3">
    <input type="text" name="name" id="name" class="form-control <?= ($errors['name'] ?? null) ? 'is-invalid' : '' ?>" value="<?= old('name') ?? $car->name ?? '' ?>" autofocus>
    <label for="name">Nama Mobil</label>
    <div class="invalid-feedback">
        <?= $errors['name'] ?? '' ?>
    </div>
</div>

<div class="mb-3 d-flex justify-content-between">
    <a href="<?= route_to('car') ?>" class="btn btn-danger text-white"><i class="fa fa-arrow-left"></i> Kembali</a>
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
</div>
