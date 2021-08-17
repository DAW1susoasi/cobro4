<?php
require_once(RUTA_APP . "/vista/includes/head.php");
?>
</head>
<body>
<?php
require_once(RUTA_APP . "/vista/includes/navbar.php");
if(isset($_POST["contrasena"]) && isset($_POST["repContra"])){
    if(trim(htmlentities($_POST["contrasena"])) === trim(htmlentities($_POST["repContra"]))){  
        $this->modelo->cambiaContra(password_hash(trim(htmlentities($_POST["contrasena"])), PASSWORD_DEFAULT), $_SESSION['usuario']);
        header("Location: " . RUTA_URL . "/usuarios_registrados");
    }
}
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="p-3 login-box">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="contrasena" class="text-info">Nueva contaseña</label>
                        <input type="text" name="contrasena" class="form-control text-center" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="repContra" class="text-info">Repetir contraseña</label>
                        <input type="text" name="repContra" class="form-control text-center" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="enviar" class="btn btn-info btn-md" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once(RUTA_APP . "/vista/includes/footer.php");
?>