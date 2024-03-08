<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body
    {
            text-align: center;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to left, #000, #333); /* Degradado de gris a negro */
            color: #fff; /* Color de texto blanco */
    }
    table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }

        table, th, td 
        {
            border: 1px solid #333;
            border-collapse: collapse;
            background-color: #1c1a1a;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }
</style>
<body>
     <h1>5630. Colegiatura</h1>
     <center>
     <table border="1">
        <tr>
            <td>Puntos</td>
            <td>11.64</td>
            <td>Límite de memoria</td>
            <td>32 MiB</td>
        </tr>
        <tr>
            <td>Límite de tiempo (caso)</td>
            <td>1s</td>
            <td>10 KiB</td>
            <td>1m0s</td>
        </tr>
        <tr>
            <td>Tamaño límite de entrada (bytes)</td>
        </tr>
     </table>
     </center>
     <h2>Descripción</h2>
     <p>
     La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, pero
     le preocupa cuanto vaya a pagar, <br> y te pide ayuda para que hagas un programa que le diga
     cuanto tenga que pagar. <br> El esquema que maneja la prepa es este: <br> Plan de pagos.
     </p>
        <ul style="text-align: left; margin-left: 250px;">
            <li>
                La colegiatura de los alumnos se determina según el numero de <br> materias que cursan. 
                El costo de cada una de las materias es de $1600.
            </li>
            <li>
                Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo
                siguiente: <br>  si el promedio obtenido por un alumno en el ultimo periodo es mayor
                o igual que 9, se le hará un <br>  descuento del 30% sobre la colegiatura y no se le cobrara
                IVA; si el promedio obtenido es menor que 9 <br>  deberá pagar la colegiatura completa, mas el IVA del 16%.
            </li>
        </ul>
    <h2>Entrada</h2>
    <p>
    El numero de materias A que Esteban va a cursar. Y un numero con decimales B que es el promedio de Esteban.
    </p>
    <h2>Salida</h2>
    <p>
    Un numero entero C con el precio a pagar. Debe de ir con un $.
    </p>
    <h2>Ejemplo</h2>
    <table border="1">
        <tr>
            <td>Entrada</td>
            <td>Salida</td>
        </tr>
        <tr>
            <td>5 <br> 9.6</td>
            <td>$5600</td>
        </tr>
        <tr>
            <td> 8 <br> 7.8 </td>
            <td> 14848 </td>
        </tr>
        <tr>
            <td>2 <br> 8 </td>
            <td> 3712 </td>
        </tr>
    </table>
    <h2>Resultados y ejemplos "si jala el php "</h2>
    <?php
                $a=5;
                $b=9.6;
                $c=$a*1600;
                if($b>=9)
                {
                    $d=$c*0.30;
                    $e=$c-$d;
                    echo "<br>el costo que pagara es de: ", $e;
                }
                else
                {
                    $f=$c*0.16;
                    $g=$c+$f;
                    echo "<br>el costo que pagara es de: ", $g;
                }
                $a=8;
                $b=7.8;
                $c=$a*1600;
                if($b>=9)
                {
                    $d=$c*0.30;
                    $e=$c-$d;
                    echo "<br>el costo que pagara es de: ", $e;
                }
                else
                {
                    $f=$c*0.16;
                    $g=$c+$f;
                    echo "<br>el costo que pagara es de: ", $g;
                }
                $a=2;
                $b=8;
                $c=$a*1600;
                if($b>=9)
                {
                    $d=$c*0.30;
                    $e=$c-$d;
                    echo "<br>el costo que pagara es de: ", $e;
                }
                else
                {
                    $f=$c*0.16;
                    $g=$c+$f;
                    echo "<br>el costo que pagara es de: ", $g;
                }
            ?>
</body>