<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoridades</title>
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <style>
    .redireccion {
        text-decoration: none;
        color: #618140;
    }

    .iframe {
        height: 100vh
    }

    @media screen and (max-width: 768px) {
        .iframe {
            height: 70vh;
        }
    }
    </style>
</head>

<body>

    <?php include 'php/header.php' ?>

    <div class="container">
        <iframe src="https://spi.scmp.com.ar/iscamen/" frameborder="0" width="100%" height="800px"></iframe>
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