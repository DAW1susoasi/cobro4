<?php
require_once(RUTA_APP . "/vista/includes/head.php");
?>
</head>
<body>
<?php
require_once(RUTA_APP . "/vista/includes/navbar.php");
?>
<div class="table-responsive">
  <table class="table table-bordered table-hover mx-auto w-auto">
      <thead class="thead-dark">
        <tr>
          <th class="text-center">Fecha</th>
          <th class="text-center">Semana</th>
          <th class="text-center">Importe</th>              
        </tr>
      </thead>
<?php  
foreach($this->modelo->cobradoMeses($_SESSION["usuario"]) as $r): 
?>
    <tr>
      <td class="text-center"><?php echo $r->fecha; ?></td>
      <td class="text-center"><?php echo $r->semana_cobro; ?></td>
      <td class="text-center"><?php echo number_format($r->suma, 2); ?></td>
    </tr>
<?php  
endforeach; 
?>
  </table>
</div>
<?php
require_once(RUTA_APP . "/vista/includes/footer.php");
?>