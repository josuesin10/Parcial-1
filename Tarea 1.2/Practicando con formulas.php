<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>12618. Practicando con formulas</title>
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
                <div class="container-logo">
                    <h1>12618. Practicando con formulas</h1>
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
          Dado un valor real "a" quieres resolver una serie de ecuaciones hasta obtener el valor de z
        </p>
        <table style="text-align: center;">
          <tr>
              <h3>x=3a+15</h2>
          </tr>
          <tr>
              <h3>y=x+3/x+1</h2>
          </tr>
          <tr>
              <h3>z=5x+7y/axy</h2>
          </tr>
      </table>
      <h3>Entrada</h3>
      <p>
        Un entero N puedes suponer que 1 &lt; a &lt; 1000
      </p>
      <h3>Salida</h3>
        <p>
          Un real que sea el valor de z impreso con tres puntos decimales.
        </p>
      <table border=1>
        <tr>
          <td>entrada</td>
          <td>salida</td>
        </tr>
        <tr>
          <td>33.562</td>
          <th>0.148</th>
      </tr>
      <tr>
          <td>72.569</td>
          <th>0.069</th>
      </tr>
      <tr>
          <td>64.835</td>
          <td>0.077</th>
      </tr>
      </table>
      <h3>Resultado del programa</h3>
      <p>-------------------------------------------------------------------------------------------------------------------</p>
</body>
</html>
<?php
            $a=33.662;
            $x=(3*$a)+(15);
            $y=($x+3)/($x+1);
            $z=(5*$x+7*$y)/($a*$x*$y);
            echo "el valor de este ejemplo de z es: ", round($z,3);
            $a=72.569;
            $x=(3*$a)+(15);
            $y=($x+3)/($x+1);
            $z=(5*$x+7*$y)/($a*$x*$y);
            echo "<br>el valor de este ejemplo de z es: ", round($z,3);
            $a=64.835;
            $x=(3*$a)+(15);
            $y=($x+3)/($x+1);
            $z=(5*$x+7*$y)/($a*$x*$y);
            echo "<br>el valor de este ejemplo de z es: ", round($z,3);
        ?>

