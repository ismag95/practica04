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
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
<?php
    $messi=$_GET['messi'];
    $ronaldo=$_GET['ronaldo'];
    $griezman=$_GET['griezman'];
    $error=0;
    if (($messi+$ronaldo+$griezman)==100) {
       if ($messi>1 && $ronaldo>1 && $griezman>1){
           echo "<div id='principal'>";
           echo "<div id='resultado'>";
           echo "<p class='nombre' id='messi'>messi</p><p id='messi'>";
           for ($a=1;$a<=$messi;$a++){
               echo "*";
           }
           echo("</p>");
           echo "<p class='nombre' id='ronaldo'>ronaldo</p><p id='ronaldo'>";
           for ($a=1;$a<=$ronaldo;$a++){
               echo "*";
           }
           echo("</p>");
           echo "<p class='nombre' id='griezman'>griezman</p><p id='griezman'>";
           for ($a=1;$a<=$griezman;$a++){
               echo "*";
           }
           echo("</p>");
           echo "</div>";
           echo "<a href='index.php?messi=$messi&ronaldo=$ronaldo&griezman=$griezman'>volver</a>";
           echo "</div>";
       }
    }elseif(($messi+$ronaldo+$griezman)<100) {
        if ($messi<0 || $messi>100){
            $error=$error+1;
        }
        if ($ronaldo<0 || $ronaldo>100){
            $error=$error+2;
        }
        if ($griezman<0 || $griezman>100){
            $error=$error+4;
        }
        $error=$error+8;
        header("Location: index.php?error=$error&messi=$messi&ronaldo=$ronaldo&griezman=$griezman");
    }elseif(($messi+$ronaldo+$griezman)>100) {
        if ($messi<0 || $messi>100){
            $error=$error+1;
        }
        if ($ronaldo<0 || $ronaldo>100){
            $error=$error+2;
        }
        if ($griezman<0 || $griezman>100){
            $error=$error+4;
        }
        $error=$error+16;
        header("Location: index.php?error=$error&messi=$messi&ronaldo=$ronaldo&griezman=$griezman");
    }
?>
</body>
</html>
