<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoridades</title>
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <style>
    .liDesplegable {
        display: flex;
        list-style: none;
    }

    .liDesplegable.collapsed:before {
        content: "▶";
        padding-right: 1%;
    }
    .liDesplegable:before {
        content: "▼";
        padding-right: 1%;
    }
    .btn:hover {
        color: #8FC74A;
    }
    </style>
</head>

<body>

    <?php include 'php/header.php' ?>

    <div class="home">
        <img src="imagenes/encabezados/operativoLobesia.png" alt="">
        <a href="index.php" class="volver"><img src="imagenes/iconos/volver.svg" alt=""></a>
    </div>
    <div class="container">
        El combate contra la plaga se inició en 2016, con la premisa del Manejo Integrado, que supone la combinación de
        procedimientos, técnicas y herramientas para lograr resultados óptimos con el menor impacto en el ambiente. El
        programa ha permitido sostener un control de la plaga por debajo del umbral de daño económico, es decir, que no
        implique una merma que genere riesgo en la producción.

        Aquí encontrará información sobre los aspectos más consultados acerca del Programa de control de la plaga
        Lobesia botrana, así como números de contacto y mail dónde evacuar sus dudas
        <br><br>
        <ul>
            <li class="liDesplegable collapsed" data-bs-toggle="collapse" data-bs-target="#texto1" aria-expanded="false"
                aria-controls="texto1">
                <div style="width:100%;">
                    <button class="btn w-100" type="button">
                        ¿Qué objetivos se alcanzaron en la campaña anterior (23/24) de control de lobesia botrana?
                    </button>
                    <div class="collapse" id="texto1">
                        <div class="card card-body">
                            Texto desplegable para el Botón 1
                        </div>
                    </div>
                </div>
            </li>
            <br>
            <li class="liDesplegable collapsed" data-bs-toggle="collapse" data-bs-target="#texto2" aria-expanded="false"
                aria-controls="texto2">
                <div style="width:100%;">
                    <button class="btn w-100" type="button">
                        ¿Qué objetivos se alcanzaron en la campaña anterior (23/24) de control de lobesia botrana?
                    </button>
                    <div class="collapse" id="texto2">
                        <div class="card card-body">
                            Texto desplegable para el Botón 1
                        </div>
                    </div>
                </div>
            </li>
            <br>
            <li class="liDesplegable collapsed" data-bs-toggle="collapse" data-bs-target="#texto3" aria-expanded="false"
                aria-controls="texto3">
                <div style="width:100%;">
                    <button class="btn w-100" type="button">
                        ¿Qué objetivos se alcanzaron en la campaña anterior (23/24) de control de lobesia botrana?
                    </button>
                    <div class="collapse" id="texto3">
                        <div class="card card-body">
                            Texto desplegable para el Botón 1
                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div>
    <br>
    <br>
    <?php include 'php/footer.php' ?>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="js/bootstrap.min.js" crossorigin="anonymous">
</script>