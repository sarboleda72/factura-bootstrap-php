<div class="modal fade" id="modalCrearProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="div">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Form Basic -->
                        <div class="card mb-4 d-sm-flex align-items-center justify-content-between">
                            <div class="card-body col-lg-6">
                                <form action="producto/op_crear_producto.php" method="post">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" require>
                                    </div>
                                    <div class="form-group">
                                        <label for="precio">Precio</label>
                                        <input type="text" class="form-control" name="precio" id="precio" require>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Crear</button>
                                    <a href="producto.php" class="btn btn-secondary">Volver</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>