<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ola</title>
    <style>
        .container-table {
            text-align: center;
            margin: auto;
        }

        table {
            border-collapse: collapse;
            margin: auto;
        }
        /*
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        */
    </style>
</head>
<body>
        <h1 style="text-align: center;">2765. Sumando dos conjuntos</h1>

    <div class="container-table">
        <table border="1">
            <tr>
                <td>Puntos</td>
                <td colspan="2">9.95</td>
                <td>Límite de memoria</td>
                <td>32 MiB</td>
            </tr>
            <tr>
                <td>Límite de tiempo (caso)</td>
                <td colspan="2">1s</td>
                <td>Límite de tiempo (total)</td>
                <td>1m0s</td>
            </tr>
            <tr>
                <td>Tamaño límite de entrada (bytes)</td>
                <td colspan="2">10 KiB</td>
            </tr>
        </table>
    </div>
    </header>
      <h3>Descripcion</h3>
        <p>
        Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea <br> N=4: 
        <br>
        2 3 4 5 <br>
        6 7 1 3 <br>
        El resultado de sumarlos es: <br>
        8 10 5 8 <br>
        </p>
      <h3>Entrada</h3>
        <p>
          Tres números reales
        </p>
      <h3>Salida</h3>
        <p>
          Un número real representado el promedio de los tres números.
        </p>
      <center>
        <h3>Ejemplo</h3>
      </center>
      <table border=1>
        <tr>
          <td>10 9.5 9.0</td>
          <td>9.5</td>
        </tr>
      </table>
      <h3>Resultado xd</h3>
      <p>-------------------------------------------------------------------</p>
</body>
</html>
</body>
</html>

<?php
$y = 100;
function Aleatorio($y)
{
    $arreglo = array();
    for ($i = 1; $i <= $y; $i++) 
    {
        array_push($arreglo, rand(0, 10));
    }
    return $arreglo;
}
function SumaArreglo($arreglo) 
{
    return array_sum($arreglo);
}
$x = Aleatorio($y);
$sumaX = SumaArreglo($x);

$xx = Aleatorio($y);
$sumaXX = SumaArreglo($xx);

echo "Arreglo 1: " . implode(' ', $x) . "<br>";
echo "Suma del Arreglo 1: $sumaX" . "<br>";

echo "Arreglo 2: " . implode(' ', $xx) . "<br>";
echo "Suma del Arreglo 2: $sumaXX" . "<br>";

echo "Suma de los 2 arreglos: " . " ";
for ($i = 0; $i < $y; $i++) 
{
    echo $x[$i] + $xx[$i] . " ";
}
echo " ";
?>
