<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de precios de gaseosas</title>
</head>
<body>
    <h1>Calculadora de precios de gaseosas</h1>

    <?php
    // Obtener los valores ingresados por el usuario
    $precioActual = $_POST["precioActual"];
    $cantidad = $_POST["cantidad"];

    // Calcular el nuevo precio con el descuento del 5%
    $nuevoPrecio = $precioActual * 0.95;

    // Calcular el importe de la compra sin el descuento
    $importeCompra = $precioActual * $cantidad;

    // Calcular el importe del descuento del 7%
    $importeDescuento = $importeCompra * 0.07;

    // Calcular el importe a pagar con el descuento
    $importePagar = $importeCompra - $importeDescuento;

    // Calcular la cantidad de caramelos obsequiados
    $obsequio = $cantidad * 2;
    ?>

    <form method="post" action="">
        <p>Precio actual de la gaseosa (por litro): <input type="number" name="precioActual" step="0.01" value="<?php echo $precioActual; ?>"></p>
        <p>Cantidad de gaseosas adquiridas: <input type="number" name="cantidad" step="1" value="<?php echo $cantidad; ?>"></p>
        <button type="submit">Calcular</button>
    </form>

    <h2>Resultados:</h2>
    <p>Nuevo precio de la gaseosa (por litro): $<?php echo number_format($nuevoPrecio, 2); ?></p>
    <p>Importe de la compra sin descuento: $<?php echo number_format($importeCompra, 2); ?></p>
    <p>Importe del descuento: $<?php echo number_format($importeDescuento, 2); ?></p>
    <p>Importe a pagar con descuento: $<?php echo number_format($importePagar, 2); ?></p>
    <p>Caramelos obsequiados: <?php echo $obsequio; ?></p>
</body>
</html>