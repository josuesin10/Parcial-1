<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
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
    <header>
                <div class="customer-support">
                    <div class="content-customer-support">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                </div>
                <div class="container-logo">
                    <h1 style="text-align: center;">12655. C16</h1>
                </div>
                    <table border="1">
                        <tr>
                            <td>Puntos</td>
                            <td colspan="2" style="text-align: center;">14.92</td>
                            <td>Límite de memoria</td>
                            <td>32 MiB</td>
                        </tr>
                        <tr>
                            <td>Límite de tiempo (caso)</td>
                            <td colspan="2" style="text-align: center;">1s</td>
                            <td>Límite de tiempo (total)</td>
                            <td>1m0s</td>
                        </tr>
                        <tr>
                            <td>Tamaño límite de entrada (bytes)</td>
                            <td colspan="2" style="text-align: center;">10 KiB</td>
                        </tr>
                    </table>
                </div>
                
                <div class="container-user">
                    <div class="content-shopping-cart">
                    </div>
                </div>
    </header>
      <h3>Descripcion</h3>
        <p>
          Escribe un programa que solicite las calificaciones de Matemáticas, Español y Cocina y nos de su promedio.
        </p>
      <h3>Entrada</h3>
        <p>
          Tres números reales
        </p>
      <h3>Salida</h3>
        <p>
          Un número real representado el promedio de los tres números.
        </p>
      <table border=1>
        <tr>
          <td>entrada</td>
          <td>salida</td>
        </tr>
        <tr>
          <td>10 9.5 9.0</td>
          <td>9.5</td>
        </tr>
      </table>
      <img src="Ejemplo ejercicio 1 tarea 1.1.png" alt="">
      <h3>Resultado del programa</h3>
      <p>-------------------------------------------------------------------------------------------------------------------</p>
</body>
</html>
<?php
// Calificaciones ingresadas por el usuario
$matematicas = 10;
$espanol = 9.5;
$cocina = 9.0;

// Calcular el promedio
$promedio = ($matematicas + $espanol + $cocina) / 3;

// Mostrar el resultado
echo "El promedio de las calificaciones es: " . number_format($promedio, 2);
?>

