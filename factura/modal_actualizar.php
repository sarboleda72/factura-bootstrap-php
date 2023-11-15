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
                            <h3 class="mb-4">Actualizar factura</h3>
                            <form action="factura/op_actualizar_factura.php" method="post">
                                <input type="hidden" name="id_factura" value="<?php echo $fila["id_factura"]; ?>">

                                <div class="form-group">
                                    <label for="nombre">Nombre actual</label>
                                    <input type="text" class="form-control" value="<?php echo $fila["nombre"]; ?>" readonly>
                                    <label for="nombre">Lista para modificar</label>
                                    <select class="form-control" name="nombre">
                                        <?php include('cliente/select_cliente.php'); ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="fecha">Fecha</label>
                                    <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo $fila["fecha"]; ?>">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Actualizar">
                                </div>
                                <?php
                                include('fecha_actual.php');
                                ?>
                            </form>
                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#modalCrearProducto">Ir a Crear</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>