<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCAMEN - Mendoza</title>
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <style>
    .card {
        width: 98%;
        padding: 2%;
        border-radius: 8px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        box-shadow: 0 .25rem .75rem rgba(0, 0, 0, 0.3);
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        height: 100%;
        padding-top: 0;
        padding-bottom: 0;
    }

    .card-text {
        font-size: 1vw;
    }

    .card-text span {
        font-size: 1.3vw;
    }

    .col-md-4 {
        display: flex;
        justify-content: center;
    }

    .reservar {
        width: 50%;
    }

    .reservar img {
        width: 100%;
    }

    #contenido-importante {
        display: none;
        flex-direction: column;
        margin-top: 5vh !important;
    }

    .importante {
        width: 100%;
        background-color: #2A6D4C;
        color: #fff;
        font-size: 4vw;
        font-weight: 800;
        text-align: center;
    }

    .formulario {
        width:100%;
        margin-top: 10vh;
    }
    .formulario iframe{
        width:100%;
    }
    @media screen and (max-width: 768px) {
        .container {
            margin-top: 3vh;
        }

        .imagen {
            display: none;
        }

        .card-body {
            display: flex;
            align-items: center
        }

        .card-text {
            text-align: center;
            font-size: 3.5vw;
        }

        .card-text span {
            font-size: 4.5vw;
        }

        .reservar {
            width: 60%;
            display: flex;
            justify-content: center;
        }

        .reservar img {
            width: 70%;
        }

        .importante {
            font-size: 8vw;
        }

        .formulario {
            margin-top: 5vh;
        }
    }
    </style>
</head>

<body>

    <?php include 'php/header.php' ?>

    <div class="home">
        <img src="imagenes/encabezados/educativas.png" alt="">
    </div>

    <div class="container d-flex flex-column flex-md-row flex-lg-row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="imagenes/actividadesEducativas/escuela.png" class="imagen img-fluid rounded-start"
                            alt="Imagen">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">
                                <span>Charlas educativas en escuelas</span>
                                <br>
                                Reservá una fecha para que uno de nuestros técnicos visite tu escuela para dar una
                                charla.
                            </p>
                            <a href="#" class="reservar" data-form="formulario1"><img
                                    src="imagenes/actividadesEducativas/reservar.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="imagenes/actividadesEducativas/sede.png" class="imagen img-fluid rounded-start"
                            alt="Imagen">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">
                                <span>Visitas educativas a nuestras sedes</span>
                                <br>
                                Reserva una fecha para que tus alumnos puedan visitar el laboratorio de Agroecología
                                ubicado
                                en la Sede KM8 .
                            </p>
                            <a href="#" class="reservar" data-form="formulario2"><img
                                    src="imagenes/actividadesEducativas/reservar.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contenido-importante" style="display: none !important;">
        <div class="importante">IMPORTANTE</div>
        <br>
        <div class="container">
            <ul>
                <li>En caso de no realizar la visita, se debe notificar por mail a difusion@iscamen.com.ar</li>
                <br>
                <li>48 hs antes de la visita, sin falta, se deben enviar a difusion@iscamen.com.ar el seguro de visitas
                    proporcionado por la DGE, el proyecto de salida y la lista de alumnos y adultos.</li>
            </ul>
            <span>CONSULTAS A:</span>
            <br><br>
            difusion@iscamen.com.ar
            <br><br>
            (261)4295450 - 4258741 - 4297315 - 4299013/15 / Interno 239
        </div>
    </div>

    <!-- Aquí va el formulario -->
    <div class="container d-flex justify-content-center">
        <div id="formulario1" class="formulario" style="display: none !important;">
            AQUI VA EL GOOGLE FORM1
        </div>

        <div id="formulario2" class="formulario" style="display: none !important;">
            <iframe
                src="https://docs.google.com/forms/d/e/1FAIpQLSesWbPtKq4UJZ4pBegb9EfB0tQsvzYli3dUI2dNHQkvMI6ozQ/viewform?embedded=true"
                width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
        </div>
    </div>
    <br>
    <br>
    <?php include 'php/footer.php' ?>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var reservarLinks = document.querySelectorAll('.reservar');
        reservarLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var formId = link.getAttribute('data-form');
                document.getElementById('contenido-importante').style.display = 'block';
                document.getElementById(formId).style.display = 'block';
                var formularios = document.querySelectorAll('.formulario');
                for (var i = 0; i < formularios.length; i++) {
                    if (formularios[i].id !== formId) {
                        formularios[i].style.display = 'none';
                    }
                }
            });
        });
    });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>