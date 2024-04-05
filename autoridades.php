<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoridades</title>
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <style>
        .presidenteTexto{
            display:flex;
            flex-direction:column;
            align-items:start;
            justify-content:center;
            margin-left: 5%;
        }
        @media screen and (max-width:768px){
            .presidenteTexto{
                margin:0;
            }
        }
    </style>
</head>

<body>

    <?php include 'php/header.php' ?>

    <div class="home">
        <img src="imagenes/encabezados/autoridades.png" alt="">
        <a href="index.php#programas" class="volver"><img src="imagenes/iconos/volver.svg" alt=""></a>
    </div>
    <div class="tituloPrincipal">
        <span>Presidente</span>
    </div>
    <div class="container d-flex flex-column flex-md-row flex-lg-row">
        <div class="contenidoImg col-12 col-md-4 col-lg-4">
            <img src="imagenes/presidente.png" alt="">
        </div>
        <br>
        <div class="presidenteTexto col-12 col-md-8 col-lg-8">
            <h4>José Orts - Productor y Bodeguero</h4>
            Oriundo del Departamento de San Martín. Miembro de la Comisión de Difusión y Evaluación de Vinos (Codevin) y
            del Centro de Bodegueros y Viñateros del Este. Orts es Técnico en Relaciones Institucionales (Universidad de
            Congreso). Además, se ha desempeñado como Diputado y Senador provincial por el segundo distrito electoral.
            Por otro lado, Orts es productor agropecuario, viñatero y propietario de una bodega
        </div>
    </div>

    <div class="tituloPrincipal">
        Secretaría
        <span>Técnica</span>
    </div>
    <div class="container">
        <span>Oscar W. Astorga - Ing. Agrónomo</span>
        <br>
        E-mail:
        <br>
        Teléfono
        <br><br>
        <span>Guillermo Azin - Ing. Agrónomo</span>
        <br>
        E-mail:
        <br>
        Teléfono:
    </div>

    <div class="tituloPrincipal">
        Secretaría
        <span>de Contabilidad y Finanzas</span>
    </div>
    <div class="container">
        <span>Silvia Marcianesi - Contadora</span>
        <br>
        E-mail:
        <br>
        Teléfono:
    </div>

    <div class="tituloPrincipal">
        Secretaría
        <span>General</span>
    </div>
    <div class="container">
        <span>Sr. Pablo Longo</span>
        <br>
        E-mail:
        <br>
        Teléfono:
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