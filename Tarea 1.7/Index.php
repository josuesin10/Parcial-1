<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemas OmegaUp</title>
    <!-- Agrega el enlace para FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to left, #000, #333); /* Degradado de gris a negro */
            color: #fff; /* Color de texto blanco */
        }

        .container-hero {
            background: linear-gradient(to right, #333, #000); /* Degradado de gris a negro */
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .container-hero i {
            font-size: 24px;
            margin: 0 10px;
        }

        .container-navbar {
            background: linear-gradient(to right, #333, #000); /* Degradado de gris a negro */
            padding: 10px 0;
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
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            margin-right: 20px;
            position: relative;
        }

        .navbar a {
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            position: relative;
            color: #333;
            background: linear-gradient(to right, #777, #FF0000);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .navbar a:hover::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background-color: #ffffff;
            /* Cambia el color de la línea al poner el cursor */
            bottom: -5px;
            left: 25%;
        }

        .navbar a:hover {
            cursor: pointer;
        }

        .search-form {
            display: flex;
            align-items: center;
        }

        .search-form input {
            padding: 8px;
            border: none;
            border-radius: 4px;
        }
        .navbar 
        {
            border-bottom: 1px solid #ccc; /* Línea de separación */
            margin-bottom: 10px;
        }
        hr 
        {
            margin: 20px 0; /* Margen arriba y abajo */
            border: none;
            border-top: 2px solid #ccc; /* Línea de separación */
            width: 100%; /* Ancho completo */
        }

        .pantalla-blanca 
        {
    
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }

        .gallery
        {
            gap: 1.5rem;
            margin-bottom: 3rem;
            margin-left: 980px;
            margin-top: -150px;
        }
        .gallery-2 img 
        {
            width: 15%; /* Puedes ajustar el porcentaje según sea necesario */
            height: auto; /* Esto mantiene la proporción original */
            margin-left: 190px;
            margin-top: -120px;
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
                <h1><span>Menú Principal</span></h1>
                <ul>
                    <li><a href="calculos-condicionales.php">Calculos Condicionales</a></li>
                    <li><a href="Formulota.php">Formulota</a></li>
                    <li><a href="el-lado-mas-corto.php">El Lado Más Corto</a></li>
                    <li><a href="escalera-de-asteriscos.php">Escalera de Asteriscos</a></li>
                </ul>
            </nav>
        </div>
        <div class="pantalla-blanca">
            <h1 style= "margin-left: 120px; margin-top: 25px;" >Tarea 1.7: Varios problemas con entrada de datos</h1>
            <ul style="text-align: left; margin-left: 150px;">
                <p>Puntos a seguir</p>
                <li >
                    Debe haber un menú principal  (una página) <br>
                </li>
                <li>
                    Deben crear una página para cada problema de omegaUp. <br>
                </li>
                <li>
                    Los datos de entrada deben leerse con un formulario.
                </li>
            </ul>
            <section class="gallery">
                <img src="Tremendo.jpg" alt="Tremendo">
            </section>
            <section class="gallery-2">
                <img src="Wenas.jpg" alt="Adios">
            </section>
        </div>
    </header>
</body>

</html>
