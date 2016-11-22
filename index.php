<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php
if (isset($_GET['messi']) && isset($_GET['ronaldo'] )&& isset($_GET['griezman'])){
    $messi=$_GET['messi'];
    $ronaldo=$_GET['ronaldo'];
    $griezman=$_GET['griezman'];
}

if (isset($_GET['error'])){
    $error=$_GET['error'];
    if ($error&8){
        echo "<h2>la suma es menor de 100</h2>";
        if ($error&1){
            echo "<h2>messi mal</h2>";
        }
        if ($error&2){
            echo "<h2>ronaldo mal</h2>";
        }
        if ($error&4){
            echo "<h2>griezman mal</h2>";
        }
    }
    if ($error&16){
        echo "<h2>la suma es mayor de 100</h2>";
        if ($error&1){
            echo "<h2>messi mal</h2>";
        }
        if ($error&2){
            echo "<h2>ronaldo mal</h2>";
        }
        if ($error&4){
            echo "<h2>griezman mal</h2>";
        }
    }
}
?>
<div id="principal">
    <h1>Resultados encuesta de Futbol, balón de oro</h1>
    <form action="pagina.php" id="formulario">
        <label for="messi">Messi</label>
        <input type="text" id="messi" name="messi" <?php
        if (isset($_GET['messi'])){
            echo "value='";
            echo $messi;
            echo "'";
        }
        if (isset($_GET['error'])){
            if ($error&1){
                echo ("style='background-color:red'");
            }
        }
        ?>><br>
        <label for="ronaldo">Cristiano Ronaldo</label>
        <input type="text" id="ronaldo" name="ronaldo" <?php
        if (isset($_GET['ronaldo'])){
            echo "value='";
            echo $ronaldo;
            echo "'";
        }
        if (isset($_GET['error'])){
            if ($error&2){
                echo ("style='background-color:red'");
            }
        }
        ?>><br>
        <label for="griezman">Griezmann</label>
        <input type="text" id="griezman" name="griezman" <?php
        if (isset($_GET['messi'])){
            echo "value='";
            echo $griezman;
            echo "'";
        }
        if (isset($_GET['error'])){
            if ($error&4){
                echo ("style='background-color:red'");
            }
        }
        ?>><br>
        <button>enviar</button>

    </form>
</div>
</body>
</html>
