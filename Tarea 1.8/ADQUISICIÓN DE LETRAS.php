<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3991. Adquisición de Letras </title>
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
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            font-size: 24px;
            margin: 0;
            color: #333;
            display: flex;
            align-items: center;
            background: linear-gradient(to right, #777, #FF0000);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .navbar h1 span {
            display: inline-block;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 10px;
            padding: 0;
        }

        .navbar ul li {
            margin-right: 35px;
            position: relative;
        }

        .navbar a {
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            position: relative;
            color: #333;
            background: linear-gradient(to right, #777, #FF0000);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }
        .navbar a:hover::after 
        {
            content: '';
            position: absolute;
            width: 50%;
            height: 5px; /* Reducí el valor para hacer la línea más delgada */
                background-color: #ffffff;
            /* Cambia el color de la línea al poner el cursor */
            bottom: -5px;
            left: 25%;
        }
        .navbar a:hover {
            cursor: pointer;
        }
        .navbar 
        {
            border-bottom: 1px solid #ccc; /* Línea de separación */
            margin-bottom: 20px;
        }
        hr 
        {
            margin: 20px 0; /* Margen arriba y abajo */
            border: none;
            border-top: 2px solid #ccc; /* Línea de separación */
            width: 100%; /* Ancho completo */
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
            <nav class="navbar container">
                <ul>
                    <li><a href="Index.php">Menu Principal</a></li>
                    <li><a href="BIT DE PARIDAD.php">Bit de Paridad</a></li>
                    <li><a href="AUTORES.php">Autores</a></li>
                    <li><a href="ADQUISICIÓN DE LETRAS.php">Adquisición de Letras</a></li>
                </ul>
            </nav>
            <h1>3991. Adquisición de Letras </h1>
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
                    <td>Límite de tiempo (total)</td>
                    <td>1m0s</td>
                </tr>
                <tr>
                    <td>Tamaño límite de entrada (bytes)</td>
                    <td>10 KiB</td>
                </tr>
            </table>
        </center>

        <h2>Descripción</h2>
        <p>
            En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d" y quiere saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos.
            El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto.
        </p>
        <h2>Entrada</h2>
        <p>
            Un solo string de letras minúsculas.
        </p>
        <h2>Salida</h2>
        <p>
            La cantidad de veces que aparece la letra favorita de Miguel.
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
                <td>abcjdlllld</td>
                <td> 2 </td>
            </tr>
        </table>
        <div class="form-container">
            <form action="ADQUISICIÓN DE LETRAS.php" method="post">
            <input type="text" name="txtPal">
            <input type="submit" value="Enviar">
            </form>
            <?php
                if($_POST){ 
                    $pal=$_POST['txtPal'];
                    $d=0;
                    $c=strlen($pal);
                    for($i=0;$i<$c;$i++){
                        if($pal[$i]=="d" or $pal[$i]=="D"){
                            $d++;
                        }
                    }
        
                    echo "Num de 'd' en el txt: ",$d;
                }
            ?>
        </div>
    </main>
</body>

</html>
