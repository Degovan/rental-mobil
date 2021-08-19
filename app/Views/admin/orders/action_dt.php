<div class="d-flex">
    <form action="<?= route_to('order.destroy', $order->id) ?>" method="post">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-sm btn-danger text-white"><i class="fa fa-trash-alt"></i></button>
    </form>
</div>
