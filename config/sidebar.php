<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <!-- <img src="img/logo/logo2.png"> -->
        </div>
        <div class="sidebar-brand-text mx-3">Factura</div>
      </a>
      <hr class="sidebar-divider my-0">
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menú
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <i class="fa-regular fa-user"></i>
          <span>Clientes</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <?php if (basename($_SERVER['PHP_SELF']) != 'cliente.php') { ?>
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="cliente.php">Listar</a>
          </div>
          <?php } else { ?>
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" data-toggle="modal" data-target="#modalCrearUsuario">Crear</a>
          </div>
          <?php } ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Producto</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <?php if (basename($_SERVER['PHP_SELF']) != 'producto.php') { ?>
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="producto.php">Listar</a>
          </div>
          <?php } else { ?>
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" data-toggle="modal" data-target="#modalCrearProducto">Crear</a>
          </div>
          <?php } ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Factura</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <?php if (basename($_SERVER['PHP_SELF']) != 'factura.php') { ?>
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="factura.php">Listar</a>
          </div>
          <?php } else { ?>
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" data-toggle="modal" data-target="#modalCrearProducto">Crear</a>
          </div>
        </div>
        <?php } ?>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>