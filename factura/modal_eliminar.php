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
                            <form action="factura/op_eliminar_factura.php?id=<?php echo $fila["id_factura"]; ?>" method="POST">
                                <div class="form-group text-center">
                                    <h5>¿Desea Eliminar?</h5>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger mb-1">Eliminar</button>
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>