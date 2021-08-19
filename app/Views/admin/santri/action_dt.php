<div class="d-flex">
    <a href="<?= route_to('santri.edit', $santri->id) ?>" class="btn btn-sm btn-info text-white me-1">
        <i class="fa fa-pencil-alt"></i>
    </a>
    <form action="<?= route_to('santri.destroy', $santri->id) ?>" method="post">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-sm btn-danger text-white"><i class="fa fa-trash-alt"></i></button>
    </form>
</div>
