<?php
require_once(RUTA_APP . "/vista/includes/head.php");
?>
<script src="<?php echo RUTA_URL; ?>/scripts/crud.js"></script>
</head>
<body>
<?php
require_once(RUTA_APP . "/vista/includes/navbar.php");
?>
<form method="POST" action="">
    <div class="table-responsive">
      <table id="dinamico" class="table table-bordered table-hover mx-auto w-auto"></table>
     </div>
</form>
<?php
require_once(RUTA_APP . "/vista/includes/footer.php");
?>