<?php
    session_start();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $messi=$_GET['messi'];
    $ronaldo=$_GET['ronaldo'];
    $griezman=$_GET['griezman'];
    if (is_numeric($messi) && is_numeric($ronaldo) && is_numeric($griezman)){
        if ($messi<=100 && $ronaldo<=100 && $griezman<=100){
            if ($messi+$ronaldo+$griezman==100){
                echo "<div style='border: 2px solid red'>
                    hola mundo
                    </div>";
                echo $griezman,$ronaldo,$messi;
            }else{
               header('Location: index.php?messi=$messi&');
            }
        }else{
            header('location: index.php');
        }
    }else{
        header('location: index.php');
    }
?>
</body>
</html>