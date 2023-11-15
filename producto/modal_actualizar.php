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
                                //include('../bd/conexion.php');
                                //include('../scripts/head.php');
                                //include('../usuarios/variable_sesion.php');

                                $queryModal = "SELECT * FROM producto WHERE id_producto = " . $fila["id_producto"];
                                $resultadoModal = $conexion->query($queryModal);

                                if ($resultadoModal->num_rows > 0) {
                                    $filaModal = $resultadoModal->fetch_assoc();
                                ?>
                                    <div class="container mt-3">
                                        <h3>Actualizar Producto</h3>
                                        <form action="producto/op_actualizar_producto.php" method="post">
                                            <input type="hidden" name="id_producto" value="<?php echo $filaModal["id_producto"]; ?>"required>

                                            <div class="form-group">
                                                <label for="nombre">Nombre</label>
                                                <input type="text" class="form-control" name="nombre" value="<?php echo $filaModal["nombre"]; ?>"required>
                                            </div>

                                            <div class="form-group">
                                                <label for="precio">Precio</label>
                                                <input type="text" class="form-control" name="precio" value="<?php echo $filaModal["precio"]; ?>"required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Actualizar</button>
                                            <br>
                                        </form>
                                    </div>
                                <?php
                                }
                                ?>
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
