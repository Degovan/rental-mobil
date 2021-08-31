<?= csrf_field() ?>

<div class="form-floating mb-3">
    <select name="car_id" id="car_id" class="form-control <?= ($errors['car_id'] ?? null) ? 'is-invalid' : '' ?>" autofocus>
        <option value="">-- pilih mobil --</option>
        <?php foreach ($cars as $car) : ?>
            <option value="<?= $car->id ?>" <?= ((old('car_id') ?? $price->car_id ?? '') == $car->id) ? 'selected' : '' ?>><?= $car->name ?></option>
        <?php endforeach; ?>
    </select>
    <label for="car_id">Mobil</label>
    <div class="invalid-feedback">
        <?= $errors['car_id'] ?? '' ?>
    </div>
</div>

<div class="form-floating mb-3">
    <input type="number" name="hours" id="hours" class="form-control <?= ($errors['hours'] ?? null) ? 'is-invalid' : '' ?>" value="<?= old('hours') ?? $price->hours ?? '' ?>">
    <label for="hours">Waktu (jam)</label>
    <div class="invalid-feedback">
        <?= $errors['hours'] ?? '' ?>
    </div>
</div>

<div class="form-floating mb-3">
    <input type="number" name="price" id="price" class="form-control <?= ($errors['price'] ?? null) ? 'is-invalid' : '' ?>" value="<?= old('price') ?? $price->price ?? '' ?>">
    <label for="price">Tarif (rupiah)</label>
    <div class="invalid-feedback">
        <?= $errors['price'] ?? '' ?>
    </div>
</div>

<div class="form-floating mb-3">
    <input type="number" name="honour" id="honour" class="form-control <?= ($errors['honour'] ?? null) ? 'is-invalid' : '' ?>" value="<?= old('honour') ?? $price->honour ?? '' ?>">
    <label for="honour">Honor (rupiah)</label>
    <div class="invalid-feedback">
        <?= $errors['honour'] ?? '' ?>
    </div>
</div>

<div class="mb-3 d-flex justify-content-between">
    <a href="<?= route_to('price') ?>" class="btn btn-danger text-white"><i class="fa fa-arrow-left"></i> Kembali</a>
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
</div>
