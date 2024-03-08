<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escalera de asteriscos</title>
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
            <h1>11338. Escalera de asteriscos</h1>
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
            Inés quiere llegar a su casa, pero accidentalmente, los arquitectos construyeron la puerta demasiado alta. Tu misión es ayudar a Inés <br>
            a subir a su casa construyendo una escalera de longitud y altura "N" hecha de asteriscos.
        </p>
        <h2>Entrada</h2>
        <p>
            Se te darán como valor de entrada un numero entero "N" el cuál representa la longitud y altura de la escalera.
        </p>
        <h2>Salida</h2>
        <p>
            Deberás imprimir como salida una escalera de dimensiones "N" de largo y "N" de alto
        </p>
        <center>
            <h2 class="form-title">Ejemplo</h2>
        </center>

        <table class="example-table">
            <tr>
                <td>Entrada</td>
                <td>Salida</td>
            </tr>
            <tr>
                <td>2</td>
                <td>#</td>
            </tr>
            <tr>
                <td>5</td>
                <td>	
                    # <br>
                    ## <br>
                    ### <br>
                    #### <br>
                    ##### <br>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>#</td>
            </tr>
            <tr>
                <td>3</td>
                <td>	
                    # <br>
                    ## <br>
                    ### <br>
                </td>
            </tr>
        </table>
        <h3 style= "margin-left: 140px; margin-top: 25px;">Limites</h3>
        <p>
            Un entero N puedes suponer que 1 &lt; N &lt; 15
        </p>

        <div class="form-container">
            <form  action="escalera-de-asteriscos.php" method="post">
                <h2>Calcula:</h2>
                numero:
                <input type="text" name="txtnumm"> <br>
                <input type="submit" value="Enviar"> <br>
            </form>
            <?php
            if($_POST)
            {
                $x=$_POST["txtnumm"];
                for($i=1; $i<=$x; $i++)
                {
                    echo str_repeat("#",$i) . "<br>";
                }
            }
        ?>
        </div>
    </main>
</body>

</html>
