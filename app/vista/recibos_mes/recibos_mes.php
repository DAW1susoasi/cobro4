<?php
require_once(RUTA_APP . "/vista/includes/head.php");
?>
<script src="<?php echo RUTA_URL; ?>/scripts/recibos_mes.js"></script>
</head>
<body>
<?php
require_once(RUTA_APP . "/vista/includes/navbar.php");
if(!isset($_SESSION["fecha"])){
    header("Location: " . RUTA_URL . "/usuarios_registrados/formulario_mes/recibos_mes");
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