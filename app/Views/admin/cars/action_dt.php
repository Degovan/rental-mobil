<div class="d-flex">
    <a href="<?= route_to('car.edit', $car->id) ?>" class="btn btn-sm btn-success text-white me-1">
        <div class="fas fa-pencil-alt"></div>
    </a>
    <form action="<?= route_to('car.destroy', $car->id) ?>" method="post">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-sm btn-danger text-white"><i class="fa fa-trash-alt"></i></button>
    </form>
</div>
