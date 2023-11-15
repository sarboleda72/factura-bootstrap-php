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
                                <h3>CREAR FACTURA</h3>
                                <form action="factura/op_crear_factura.php" method="POST">
                                    <div class="form-group">
                                        <label for="nombre">Cliente</label>
                                        <select class="form-control" name="nombre" id="nombre">
                                            <option value="0">Seleccione una opción</option>
                                            <?php include 'cliente/select_cliente.php'?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha">Fecha</label>
                                        <input type="date" class="form-control" min="2023-11-14"name="fecha" id="fecha" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Crear</button>
                                    <a href="factura.php" class="btn btn-secondary">Volver</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>