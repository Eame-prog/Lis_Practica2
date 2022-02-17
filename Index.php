<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Estilo.css">
    <title>Desarrollo guia 4</title>
</head>
<body>
    

<form method="post">
    <input type="text" 
            name="txtBase" 
            title="Solo se aceptan numeros" 
            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" 
            placeholder="Numero base"
            class="txtBase"><br><br>

    <input type="text" 
            name="txtPotencia" 
            title="Solo se aceptan numeros" 
            oninput="this.value = this.value.replace(/[.]/g, '')" 
            placeholder="Potencia del numero"
            class="txtPotencia"><br><br>

    <input type="submit" 
        name="btnCalcular" 
        value="Calcular"
        class="btnCalcular"><br><br>
</form>
</body>
</html>


<?php
if((isset($_POST["btnCalcular"])) && (!empty($_POST["txtBase"]))  && (!empty($_POST["txtPotencia"]))){

    $Base = $_POST["txtBase"];
    $Potencia = $_POST["txtPotencia"];
    $Total=$Base;

    if($Potencia <= 100)
    {
        $i=1;
        while($i < $Potencia)
        {
            $Total = $Total * $Base;
            $i++;
        }
        
        ?><p class="lblResultadoError"><?php echo $Base. "^" .$Potencia. "= " .$Total; ?></p> <?php
    }

}
else{
    ?> <p class="lblResultadoError">No se puede calcular</p> <?php
}
?>