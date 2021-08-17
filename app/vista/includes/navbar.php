<?php
require_once(RUTA_APP . "/vista/includes/validacion.php");
?>
<div class="mx-auto w-50">
    <nav class="navbar navbar-expand-xl bg-dark navbar-dark rounded-lg my-4">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo RUTA_URL; ?>/usuarios_registrados/cerrar_sesion/">Cerrar sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo RUTA_URL; ?>/usuarios_registrados/cambia_contra/">Cambiar contraseña</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Cobrar/Descargar recibos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/usuarios_registrados/formulario_semana/cobdes">General</a>
              <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/usuarios_registrados/formulario_semana/cobdes_id">Por id</a>
              <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/usuarios_registrados/formulario_semana/cobdes_importe">Por importe</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo RUTA_URL; ?>/usuarios_registrados/crud">Insertar recibos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Informes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
              <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/usuarios_registrados/cobrado_meses">Cobrado por meses/semanas</a>
              <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/usuarios_registrados/descargado_meses">Descargado por meses/semanas</a>
              <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/usuarios_registrados/cargado_meses">Cargado por meses</a>
              <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/usuarios_registrados/pendiente_meses">Pendiente por meses</a>
              <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/usuarios_registrados/formulario_mes/quedaron_pendientes_mes">Recibos pendientes en mes</a>
              <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/usuarios_registrados/formulario_mes/recibos_mes">Recibos en mes</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="javascript:return confirm('Cerrar mes. ¿Continuar?');" href="<?php echo RUTA_URL; ?>/usuarios_registrados/cerrar_mes1">Cerrar mes</a>
          </li>
        </ul>
      </div>
    </nav>
</div>