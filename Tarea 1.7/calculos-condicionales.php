<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos condicionales</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #080808;
            display: flex;
            min-height: 100vh;
            flex-direction: column; /* Alinea los elementos en columna */
            color: #fff; /* Color de texto blanco */
        }

        .container-hero {
            background: linear-gradient(to right, #333, #000);
            text-align: center;
        }

        .container-navbar {
            background: linear-gradient(to bottom, #333, #000);
            text-align: center;
        }

        h1 /*Titulo " formulota" */
        {
            font-family: 'Didot', serif;
            background: linear-gradient(to right, #555, #ff0000);
            -webkit-background-clip: text;
            color: transparent;
            display: inline-block;
        }

        h2,
        p {
            width: 80%;
            margin: 0 auto; /* Centra el contenedor */
            padding: 10px;
            border-bottom: 1px solid #ccc; /* Línea delgada debajo */
        }

        .form-title {
            border-bottom: none; /* Quitar la línea delgada debajo de este h2 */
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

        table.example-table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            background-color: #1c1a1a; /* Color de fondo de la tabla */
        }

        table.example-table th, table.example-table td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
            background-color: #0d0c0c; /* Color de fondo de las celdas */
        }
        .form-container 
        {
            text-align: center;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <div class="Content-customer-support">
                    </div>
                </div>
                <div class="container-logo">
                </div>
                <div class="container-user">
                </div>
            </div>
        </div>
        <div class="container-navbar">
            <h1>7050. Cálculos condicionales</h1>
        </div>
    </header>

    <main>
        <center>
            <table>
                <tr>
                    <td>Puntos</td>
                    <td>23.98</td>
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
            Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta trabajo decidir en qué situaciones se <br>
            deben hacer qué operaciones. Un compañero te sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial N, <br>
            realizar las siguientes operaciones en el orden indicado y con aritmética entera:
        </p>
            <ol style="text-align: left; margin-left: 150px;">
                <li >
                    Si el valor actual de "N" es par, divídelo entre 2. En caso contrario, súmale 1. <br>
                </li>
                <li>
                    Si el valor actual de "N" tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10. <br>
                </li>
                <li>
                    Si el valor actual de "N" es un múltiplo de tres, réstale uno.
                </li>
            </ol>
        <h2>Entrada</h2>
        <p>
            Un entero N puedes suponer que 1 &lt; N &lt; 1000
        </p>

        <h2>Salida</h2>
        <p>
            Dos enteros que correspondan con el valor final de N y el número de veces que N fue modificado respectivamente.
        </p>

        <center>
            <h2 class="form-title">Ejemplos</h2>
        </center>

        <table class="example-table">
            <tr>
                <th>Entrada</th>
                <th>Salida</th>
            </tr>
            <tr>
                <td>7</td>
                <td>8 1</td>
            </tr>
        </table>

        <div class="form-container">
            <form action="calculos-condicionales.php" method="post">
                <h2>Calculos</h2>
                <label for="campo1">Ingresa un numero::</label>
                <input type="text" id="campo1" name="campo1">

                <input type="submit" value="Enviar"> <br>
            </form>
            <?php
                if($_POST)
                {
                    $n=$_POST["campo1"];
                    $c=0;
                    if ($n%2==0)
                    {
                        $n/=2;
                        $c++;    
                    }
                    else
                    {
                        $n+=1;
                        $c++;
                    }

                    if($n%3==0)
                    {
                        $n-=1;
                        $c++;
                    }
                    echo $n . " " . $c;
                }
            ?>
        </div>
    </main>
</body>
</html>
