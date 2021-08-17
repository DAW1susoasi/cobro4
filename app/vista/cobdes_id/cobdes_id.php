<?php
require_once(RUTA_APP . "/vista/includes/head.php");
?>
<script src="<?php echo RUTA_URL; ?>/scripts/cobdes_recibos_id.js"></script>
</head>
<body>
<?php
require_once(RUTA_APP . "/vista/includes/navbar.php");
if(!isset($_SESSION["semana"])){
    header("Location: " . RUTA_URL . "/usuarios_registrados/formulario_semana/cobdes_id");
}
?>
<form method="POST" action="">
    <div class="table-responsive">
      <table id="dinamico" class="table table-bordered table-hover mx-auto w-auto"></table>
     </div>
</form>
<?php
require_once(RUTA_APP . "/vista/includes/footer.php");
?>