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
$messi=$_GET['messi'];
$ronaldo=$_GET['ronaldo'];
$griezman=$_GET['griezman'];
if (isset($_GET['error'])){
    $error=$_GET['error'];
    if ($error&8){
        echo "<p>la suma es menor de 100</p>";
        if ($error&1){
            echo "<p>messi mal</p>";
        }
        if ($error&2){
            echo "<p>ronaldo mal</p>";
        }
        if ($error&4){
            echo "<p>griezman mal</p>";
        }
    }
    if ($error&16){
        echo "<p>la suma es mayor de 100</p>";
        if ($error&1){
            echo "<p>messi mal</p>";
        }
        if ($error&2){
            echo "<p>ronaldo mal</p>";
        }
        if ($error&4){
            echo "<p>griezman mal</p>";
        }
    }
}
?>
<div id="principal">
    <h1>Resultados encuesta de Futbol, balón de oro</h1>
    <form action="pagina.php" id="formulario">
        <label for="messi">Messi</label>
        <input type="text" id="messi" name="messi" <?php
        echo "value='";
        echo $messi;
        echo "'";
        if (isset($_GET['error'])){
            if ($error&1){
                echo ("style='background-color:red'");
            }
        }
        ?>><br>
        <label for="ronaldo">Cristiano Ronaldo</label>
        <input type="text" id="ronaldo" name="ronaldo" <?php
        echo "value='";
        echo $ronaldo;
        echo "'";
        if (isset($_GET['error'])){
            if ($error&2){
                echo ("style='background-color:red'");
            }
        }
        ?>><br>
        <label for="griezman">Griezmann</label>
        <input type="text" id="griezman" name="griezman" <?php
        echo "value='";
        echo $griezman;
        echo "'";
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
