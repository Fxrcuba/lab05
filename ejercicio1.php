<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Sueldo de Vendedor</title>
</head>
<body>
    <h1>Calculadora de Sueldo de Vendedor</h1>
    <form method="post" action="">
        <label for="importe_total_vendido">Importe total vendido del mes:</label>
        <input type="number" name="importe_total_vendido" id="importe_total_vendido" required>
        <br>
        <label for="hijos_en_edad_escolar">Cantidad de hijos en edad escolar:</label>
        <input type="number" name="hijos_en_edad_escolar" id="hijos_en_edad_escolar" required>
        <br>
        <input type="submit" name="calcular" value="Calcular">
    </form>
    <?php
    if (isset($_POST["calcular"])) {
        $importe_total_vendido = $_POST["importe_total_vendido"];
        $hijos_en_edad_escolar = $_POST["hijos_en_edad_escolar"];

        $sueldo_basico = 600;
        $porcentaje_comision = 7.5;
        $bonificacion_por_hijo = 50;
        $porcentaje_descuento = 11;
    
        $comision = ($porcentaje_comision / 100) * $importe_total_vendido;

        $bonificacion = $bonificacion_por_hijo * $hijos_en_edad_escolar;

        $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;

        $descuento = ($porcentaje_descuento / 100) * $sueldo_bruto;

        $sueldo_neto = $sueldo_bruto - $descuento;

        echo "<h2>Resultados</h2>";
        echo "Comisión: S/. " . $comision . "<br>";
        echo "Bonificación: S/. " . $bonificacion . "<br>";
        echo "Sueldo bruto: S/. " . $sueldo_bruto . "<br>";
        echo "Descuento: S/. " . $descuento . "<br>";
        echo "Sueldo neto: S/. " . $sueldo_neto . "<br>";
    }
    ?>
</body>
</html>
