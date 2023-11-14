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
                            <?php
                            $queryModal = "SELECT * FROM cliente WHERE id_cliente =" .  $fila["id_cliente"];
                            $resultadoModal = $conexion->query($queryModal);

                            if ($resultadoModal->num_rows > 0) {
                                $filaModal = $resultadoModal->fetch_assoc();
                            ?>
                                <h3>ACTUALIZAR CLIENTE</h3>
                                <form action="cliente/op_actualizar_cliente.php" method="post">
                                    <input type="hidden" name="id_cliente" value="<?php echo $filaModal['id_cliente'] ?>">

                                    <div class="form-group">
                                        <label for="nombre">Actualizar Nombre</label>
                                        <input type="text" class="form-control" name="nombre" value="<?php echo $filaModal['nombre'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="direccion">Actualizar Dirección</label>
                                        <input type="text" class="form-control" name="direccion" value="<?php echo $filaModal['direccion'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="telefono">Actualizar Teléfono</label>
                                        <input type="text" class="form-control" name="telefono" value="<?php echo $filaModal['telefono'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Actualizar">
                                    </div>
                                </form>
                            <?php } ?>
                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col-12">
                                    <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#modalCrearUsuario">Ir a Crear</button>
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