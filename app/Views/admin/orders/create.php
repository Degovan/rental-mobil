<?= $this->extend('layout/app') ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="/orders">Orders</a></li>
<li class="breadcrumb-item active" aria-current="page">Tambah</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Form</h5>
        <form action="<?= route_to('orders') ?>" method="post">
            <div class="row">
                <?= csrf_field() ?>
                <input id="santri_id" type="hidden" name="santri_id">
                <div class="col-md-6">
                    <?php if ($errors['santri_id'] ?? null) : ?>
                        <div class="alert alert-danger" role="alert">
                            Santri harus dipilih
                        </div>
                    <?php endif; ?>
                    <div class="form-floating mb-3">
                        <input type="text" name="fullname" id="fullname" class="form-control <?= ($errors['fullname'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="fullname">Nama Lengkap</label>
                        <div class="invalid-feedback">
                            <?= $errors['fullname'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" readonly name="registration_number" id="registration_number" class="form-control <?= ($errors['registration_number'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="registration">Nomor Induk</label>
                        <div class="invalid-feedback">
                            <?= $errors['registration_number'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" readonly name="born_place" id="born_place" class="form-control <?= ($errors['born_place'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="born_place">Tempat Lahir</label>
                        <div class="invalid-feedback">
                            <?= $errors['born_place'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" readonly name="born_date" id="born_date" class="form-control <?= ($errors['born_date'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="born_date">Tanggal Lahir</label>
                        <div class="invalid-feedback">
                            <?= $errors['born_date'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" readonly name="domicile_block" id="domicile_block" class="form-control <?= ($errors['domicile_block'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="domicile_block">Blok Domisili</label>
                        <div class="invalid-feedback">
                            <?= $errors['domicile_block'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" readonly name="educational_institute" id="educational_institute" class="form-control <?= ($errors['educational_institute'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="educational_institute">Lembaga Pendidikan</label>
                        <div class="invalid-feedback">
                            <?= $errors['educational_institute'] ?? '' ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select name="car_id" id="car_id" class="form-control <?= ($errors['car_id'] ?? null) ? 'is-invalid' : '' ?>">
                            <option value="">-- pilih mobil --</option>
                            <?php foreach ($cars as $car) : ?>
                                <option value="<?= $car->id ?>"><?= $car->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="car_id">Mobil</label>
                        <div class="invalid-feedback">
                            <?= $errors['car_id'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="hours" id="hours" class="form-control <?= ($errors['hours'] ?? null) ? 'is-invalid' : '' ?>">
                            <option value="">-- pilih waktu --</option>
                        </select>
                        <label for="hours">Waktu (jam)</label>
                        <div class="invalid-feedback">
                            <?= $errors['hours'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" readonly name="price" id="price" class="form-control <?= ($errors['price'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="price">Nominal</label>
                        <div class="invalid-feedback">
                            <?= $errors['price'] ?? '' ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" readonly name="honour" id="honour" class="form-control <?= ($errors['honour'] ?? null) ? 'is-invalid' : '' ?>">
                        <label for="honour">Honor Sopir</label>
                        <div class="invalid-feedback">
                            <?= $errors['honour'] ?? '' ?>
                        </div>
                    </div>
                    <h4>Total Harga: </h4>
                    <p>Rp. <span id="total">0</span></p>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <a href="<?= route_to('orders') ?>" class="btn btn-danger text-white"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('javascript'); ?>
<script>
    function updateSantriForm(id) {
        $.ajax({
            url: `/santri/show/${id}?type=json`,
            type: 'get',
            dataType: 'json',
            success: function(data) {
                $.map(data, function(value, label) {
                    $(`#${label}`).val(value);
                });
            }
        });
    }

    $('#fullname').autocomplete({
        source: (request, response) => {
            $.ajax({
                url: '<?= route_to('order.autocomplete') ?>',
                method: 'post',
                data: {
                    name: request.term
                },
                dataType: 'json',
                success: (data) => {
                    let santris = $.map(data, santri => {
                        return {
                            label: santri.fullname,
                            value: santri.id
                        }
                    });

                    response(santris);
                }
            });
        },
        select: function(event, ui) {
            const fullname = ui.item.label;
            $('#fullname').val(fullname);
            $('#santri_id').val(ui.item.value);


            updateSantriForm(ui.item.value);
            return false;
        },
        max: 10,
        minLength: 3
    });

    function updateHoursChoices(hours) {
        $('#hours').html('');

        if (typeof(hours) == null) return true;

        $.each(hours, (i, hour) => {
            $('#hours').append(`<option value="${hour}">${hour} jam</option>`);
        });

        return $('#hours').trigger('change');
    }

    $('#car_id').on('change', function(e) {
        $.ajax({
            method: 'post',
            url: '<?= route_to('order.hours') ?>',
            data: {
                car_id: $('#car_id').val()
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'success') {
                    return updateHoursChoices(data.hours);
                }

                return updateHoursChoices(null);
            }
        });
    });

    function sumTotalPrice(data) {
        const cost = parseInt(data.price);
        const honour = parseInt(data.honour);

        return cost + honour;
    }

    $('#hours').on('change', function() {
        $.ajax({
            method: 'post',
            url: '<?= route_to('order.cost') ?>',
            data: {
                car_id: $('#car_id').val(),
                hours: $('#hours').val()
            },
            dataType: 'json',
            success: function(price) {
                if (price.status == 'success') {
                    $('#price').val(price.data.price);
                    $('#honour').val(price.data.honour);
                    $('#total').text(sumTotalPrice(price.data));
                } else {
                    $('#price').val('');
                    $('#honour').val('');
                    $('#total').text('0');
                }
            }
        });
    });
</script>
<?= $this->endSection(); ?>
