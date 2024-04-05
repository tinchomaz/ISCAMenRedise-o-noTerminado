<header>
    <nav class="navbar header navbar-expand-lg navbar-light bg-light">
        <div class="navbar-brand"><a href="index.php"><img src="imagenes/logo.svg" alt=""></a></div>
        <ul class="navbar-nav mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Institucion
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="quienes_somos.php">Quiénes somos</a></li>
                    <li><a class="dropdown-item" href="autoridades.php">Autoridades</a></li>
                    <li><a class="dropdown-item" href="consejo.php">Consejo</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="informacion_publica.php">Información Pública</a>
            </li>
        </ul>
        <form class="d-flex search" id="searchForm" action="buscar.php" method="POST">
            <input type="hidden" name="search" value="searchXLabel">
            <input class="search-form_input form-control" type="text" name="txtLabel" value="" autocomplete="off"
                placeholder="Buscar" autocomplete="off">
            <button class="btn" type="submit" id="searchButton"><img src="imagenes/iconos/buscar.svg" alt=""></button>
        </form>
    </nav>

    <div class="headerMobile">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Lista del Navbar -->

            <div class="navbar-brand">
                <a href="index.php">
                    <img src="imagenes/logo.svg" alt="">
                </a>
            </div>
            <div class="search">
                <button class="btn" id="toggleButton"><img src="imagenes/iconos/buscar.svg" alt=""></button>
                <form class="search-form" id="searchForm" action="buscar.php" method="GET">
                    <input class="form-control mobile search-input" type="text" placeholder="Buscar" id="buscar"
                        name="txtLabel" autocomplete="off">
                    <button class="btn" type="submit" id="searchButton"><img src="imagenes/iconos/buscar.svg"
                            alt=""></button>
                </form>
            </div>
            <div class="navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Institucion
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="quienes_somos.php">Quiénes somos</a></li>
                            <li><a class="dropdown-item" href="autoridades.php">Autoridades</a></li>
                            <li><a class="dropdown-item" href="consejo.php">Consejo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informacion_publica.php">Información Pública</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    </div>
</header>
<script>
const toggleButton = document.getElementById('toggleButton');
const searchForm = document.getElementsByClassName('search-form')[0];
const toggleBar = document.getElementById('navbar-toggler');
const navBar = document.getElementById('navbarSupportedContent');
toggleButton.addEventListener('click', function() {
    toggleButton.style.display = 'none';
    searchForm.style.display = 'flex';
    navBar.style.display = 'none';
});
toggleBar.addEventListener('click', function() {
    toggleButton.style.display = 'flex';
    searchForm.style.display = 'none';
    if (navBar.style.display === 'none') {
        navBar.style.display = 'block';
    } else {
        navBar.style.display = 'none';
    }
});
</script>