<?php
session_name('jugador');
session_start();
//procesamiento del formulario

    if(isset($_POST['boton'])){
        var_dump("boton");
        $_SESSION['jugador']++;

    }elseif (isset($_POST['reset'])) {
            session_destroy();
        }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tres en raya</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Bienvenido al juego del tres en raya</h1>
    <div>
        <?php
            echo"le toca el turno al ".$jugador;
        ?>
        <form method="post">
                <button name="boton" type="submit" value="1"></button>
                <button name="boton" type="submit" value="2"></button>
                <button name="boton" type="submit" value="3"></button>
            </br>
                <button name="boton" type="submit" value="4"></button>
                <button name="boton" type="submit" value="5"></button>
                <button name="boton" type="submit" value="6"></button>
            </br>
                <button name="boton" type="submit" value="7"></button>
                <button name="boton" type="submit" value="8"></button>
                <button name="boton" type="submit" value="9"></button>
            </br>
            </br>
            <input class="especial" name="reset" type="submit" value="Reiniciar partida">
        </form>
    </div>
</body>
</html>