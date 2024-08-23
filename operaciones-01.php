<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones 01</title>
</head>
<body>
    <h1>Realice las operaciones aritméticas básicas</h1>
    <?php 
        $n1 = 2;
        $n2 = 3;
        $suma = $n1 + $n2;
        $resta = $n1 - $n2;
        $multiplicacion = $n1 * $n2;
        $division = $n1 % $n2;
    ?>
    <p>los numeros son 2 y 3<p>
    <p>La suma es: <?php echo $suma; ?></p>
    <p>La resta es: <?php echo $resta; ?></p>
    <p>la multiplicacion es: <?php echo $multiplicacion; ?></p>
    <p>La divicion es: <?php echo $division; ?></p>
</body>
</html>