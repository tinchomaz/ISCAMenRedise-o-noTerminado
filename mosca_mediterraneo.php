<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mosca Del Mediterraneo</title>
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <style>
    .ciclo img {
        width: 99%;
        transition: filter 0.3s;
    }

    .ciclo:hover img {
        filter: grayscale(100%);
    }

    .ciclo {
        position: relative;
        /* Agregamos posicionamiento relativo */
    }

    .zoom-icon {
        display: none;
        position: absolute;
        width: 30% !important;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        filter: none !important;
    }

    .ciclo:hover .zoom-icon {
        display: block;
    }

    #zoomedImageContainer {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        overflow: auto;
    }

    #zoomedImageContainer img {
        display: block;
        margin: auto;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        filter: grayscale(0%);
    }

    #zoomedImage {
        width: 60vw;
    }

    @media screen and (max-width: 768px) {
        #zoomedImage {
            width: 80vw;
        }

        .paises{
            font-size:4vw;
        }
    }

    #closeZoom {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 30px;
        color: #fff;
        cursor: pointer;
    }

    #closeZoom:hover {
        color: red;
    }

    .mosca {
        padding-left: 1%;
    }

    .mosca img {
        width: 100%;
    }

    .bandera {
        width: 90%;
        object-fit: contain;
    }

    .cardPais {
        height: 25vh;
    }

    .paises {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .bandera {}
    </style>
</head>

<body>

    <?php include 'php/header.php' ?>

    <div class="home">
        <img src="imagenes/encabezados/moscaMediterraneo.png" alt="">
        <a href="index.php#programas" class="volver"><img src="imagenes/iconos/volver.svg" alt=""></a>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <button class="btn botonPrograma" data-target="#contenido1" id="btn1">La Plaga</button>
        <div class="mx-2"></div>
        <button class="btn botonPrograma" data-target="#contenido2" id="btn2">Las Acciones</button>
        <div class="mx-2"></div>
        <button class="btn botonPrograma" data-target="#contenido3" id="btn3">El Método</button>
    </div>
    <div id="contenido1" class="contenido">
        <div class="tituloPrincipal">
            Biología de la
            <span>Mosca</span>
        </div>
        <div class="container d-flex flex-column align-items-center">
            <div class="col-12">
                La mosca del Mediterráneo, cuyo nombre científico es Ceratitis capitata Wied, es una de las llamadas
                "moscas de la fruta" o “moscas de los frutos”, que se distribuyen en el mundo desde zonas tropicales a
                templadas, existiendo un registro de 4257 especies.
                <br>
                <br>
                La mayoría son fitófagas, es decir se alimentan de vegetales, y muchas de ellas son reconocidas como
                plagas de los cultivos, ya que provocan fuertes pérdidas en la producción.
                <br>
                <br>
                Es más pequeña que la mosca doméstica, de cuerpo amarillo y negro, presenta un solo par de alas
                membranosas, con tres bandas de color amarillo-anaranjado y marrones, formando el característico patrón
                alar semejando al símbolo π de matemática.
                <br>
                <br>
                La cabeza es ancha y grande; ojos grandes con ocelos, el macho de Ceratitis capitata presenta en la
                cabeza un par de cerdas capitadas (ensanchadas) en sus extremos que la hembra no posee. Antenas cortas
                con tres segmentos y arista, aparato bucal con proboscis y labella grande característico de los dípteros
                (moscas). La cara es recta o inclinada hacia atrás con frente ancha donde se encuentra la sutura
                frontal.
            </div>
            <br>
            <div class="mosca col-8 d-flex justify-content-center align-items-center">
                <img src="imagenes/programasContenido/mosca/mosca1.png" alt="">
            </div>
        </div>

        <div class="tituloPrincipal">
            Ciclo
            <span>Bio-Ecológico</span>
        </div>
        <div class="container">
            <div class="col-12">
                Como todas las especies del complejo “moscas de los frutos” las moscas del Mediterráneo atraviesan
                durante su vida por cuatro estados o etapas netamente diferenciadas: huevo, larva, pupa o capullo y
                adultos.
                <br><br>
                Para comprender la biología y ecología de estos insectos, hay que tener en claro que su ciclo de vida
                depende de las condiciones ecológicas de cada región; está estrechamente regulado por factores tales
                como temperatura, humedad, vegetación nativa, sustrato de pupación, sustrato de oviposición, y
                disponibilidad de alimentos (frutos hospedantes) entre otros.
                <br><br>
                Las hembras de la mosca del Mediterráneo colocan huevos perforando la piel de las frutas, los cuales al
                cabo de dos o tres días se transforman en larvas o gusanos. Las larvas nacen dentro de la fruta y se
                alimentan de la pulpa, causando su pudrición.
                <br><br>
                Este desarrollo se completa entre los siete y los diez días, momento en que abandonan la fruta, caen al
                suelo, se entierran y se transforman en pupas o capullos. Para empupar la larva deja de moverse,
                alcanzando la inmovilidad total. En este estado comienza una metamorfosis que culmina en aproximadamente
                diez días si la temperatura permanece uniforme a 22ºC. El adulto emerge de la pupa y tarda dos o tres
                días en alcanzar la madurez sexual; una vez lograda se produce la cópula.
                <br><br>
                Cuatro o cinco días después del apareamiento, la hembra está en condiciones de poner huevos. El
                desarrollo de huevo a adulto puede ocurrir en menos de tres semanas, o durar hasta tres meses o más,
                cuando se presentan condiciones desfavorables. Existen generalmente varias generaciones al año,
                dependiendo del lugar. En Mendoza este insecto pasa el invierno como pupa o capullo en el suelo y como
                larva en los cítricos que sirven de puente natural para la continuidad de la plaga durante el ciclo
                invernal.
            </div>
            <br>
            <div class="d-flex flex-wrap">
                <div class="ciclo col-lg-3 col-6">
                    <img src="imagenes/programasContenido/mosca/mosca2.png" alt="" class="cicloImg">
                    <img src="imagenes/programasContenido/mosca/zoom.svg" alt="" class="zoom-icon">
                </div>
                <div class="ciclo col-lg-3 col-6">
                    <img src="imagenes/programasContenido/mosca/mosca3.png" alt="" class="cicloImg">
                    <img src="imagenes/programasContenido/mosca/zoom.svg" alt="" class="zoom-icon">
                </div>
                <div class="ciclo col-lg-3 col-6">
                    <img src="imagenes/programasContenido/mosca/mosca4.png" alt="" class="cicloImg">
                    <img src="imagenes/programasContenido/mosca/zoom.svg" alt="" class="zoom-icon">
                </div>
                <div class="ciclo col-lg-3 col-6">
                    <img src="imagenes/programasContenido/mosca/mosca5.png" alt="" class="cicloImg">
                    <img src="imagenes/programasContenido/mosca/zoom.svg" alt="" class="zoom-icon">
                </div>
            </div>
            <div id="zoomedImageContainer">
                <span id="closeZoom">&times;</span>
                <img id="zoomedImage" src="" alt="">
            </div>
        </div>

        <div class="tituloPrincipal">
            ¿Qué daños
            <span>provoca?</span>
        </div>
        <div class="container">
            En un agroecosistema hay muy pocos insectos que ocasionan la mayor parte del daño; a éstos se los denomina
            insectos o plagas clave. Éstas son aquellas que se presentan siempre en el cultivo con una densidad
            poblacional por encima del nivel de daño económico. Pueden ser naturales o introducidas. Existen en el mundo
            alrededor de 150 plagas clave.
            <br><br>
            La mosca del Mediterráneo es considerada mundialmente como una de las plagas agrícolas más dañinas para los
            frutales y hortalizas, capaz de atacar a más de 250 especies vegetales. En estado de larva o gusano se
            alimenta de la pulpa de la fruta, provocando su pudrición y destrucción.
            <br><br>
            Tiene un alto poder de dispersión y adaptación lo que le ha permitido extenderse desde África Occidental
            hasta abarcar más de 90 países en el mundo. Se detectó por primera vez en el continente americano en 1901
            cuando se comunicó su presencia en Brasil. Posteriormente en Uruguay durante 1932 y en Argentina en el año
            1934. La variedad de hospederos, es decir especies que puede atacar, incluye más de 250.
            <br><br>
            Frecuentemente amplían su rango de hospedantes (planta en la que pueden completar su ciclo de vida) y sufren
            procesos de especiación. Cuando son introducidas en un lugar nuevo, aumentan poco a poco, el número de
            especies frutales atacadas.
            <br><br>
            Si bien Mendoza no es una provincia productora de cítricos comerciales, este insecto pasa el invierno como
            pupa o capullo en el suelo y como larva en los cítricos ornamentales de los patios de las casas, que sirven
            de puente natural para la continuidad de la plaga durante el ciclo invernal. Estos frutales constituyen, en
            esta época del año, el principal foco de infestación, ya que es allí donde la mosca del Mediterráneo
            continúa su ciclo biológico.
            <br><br>
            <span>Hospederos</span>
            <br><br>
            Son especies vegetales en cuyos frutos la mosca del Mediterráneo pone huevos que luego al transformarse en
            larvas, se alimentan de la pulpa de dichos frutos. (plantas en las que pueden completar su ciclo de vida)
        </div>
        <br>
        <br>
        <div class="frutas">
            <div class="container">
                ARANDANO, BABACO, CARAMBOLA, CEREZO, CHIRIMOYA, CIRUELO, CITRICOS (CIDRA, CALAMONDÍN, KUMQUAT, LIMA
                DULCE, LIMA, MANDARINA, MINEOLA, NARANJA, NARANJA AGRIA, POMELO), DAMASCO, DURAZNO, FRAMBUESA, GRANADA,
                GUANABANA, GUAYABA, HIGO, KIWI, KAKI, LITCHI, LOCOTO, LUCUMA, MANGO, MANZANA, MARACUYÁ, MEMBRILLO,
                NECTARINA,NISPERO, OLIVO MADURO, PALTA, PAPAYA, PASIONARIA, PEPINO DULCE, PERA, PIMIENTO, TOMATE DE
                ARBOL, TUNA, UCHUBA Y UVA.
            </div>
        </div>
    </div>
    <div id="contenido2" class="contenido" style="display: none;">
        <div class="tituloPrincipal">
            Programa de
            <span>Control y Erradicación</span>
        </div>
        <div>
            <div class="container col-12">
                El propósito de este programa que desarrolla ISCAMEN es erradicar la mosca del Mediterráneo de los
                cuatro oasis productivos de la provincia, con el fin de alcanzar el reconocimiento internacional de Área
                libre de Moscas de los Frutos, que permita incrementar los volúmenes exportables de productos agrícolas.
                <br><br>
                Mendoza cuenta con reconocimientos internacionales gracias al trabajo desarrollado; los Departamentos de
                Tunuyán, Tupungato, San Carlos, San Rafael, General Alvear y Malargüe (70% del territorio provincial)
                son reconocidos como Áreas Libres de moscas de los frutos (ALMF) por el Departamento de Agricultura de
                los Estados Unidos, el Servicio Agrícola Ganadero de Chile y el Departamento de Agricultura de China.
                <br><br>
                Asimismo, los Oasis Norte y Este son reconocidos como Áreas de Escasa Prevalencia (AEP) lo que significa
                que la plaga está presente, pero en niveles muy bajos y localizada principalmente en áreas urbanas.
                <br><br>
                Recientemente se logró la apertura del mercado de EEUU a la cereza mendocina, que se suma al de los
                duraznos del sur provincial, que ya hace varias campañas ingresan sin restricciones cuarentenarias a ese
                país, lo que permite aumentar el margen de rentabilidad. Para alcanzar estos mercados, sin necesidad de
                cumplir con tratamientos cuarentenarios, es una condición fundamental que la fruta tenga origen en áreas
                libres de moscas de los frutos.
                <br><br>
                <div class="col-12">
                    <img src="imagenes/programasContenido/mosca/acciones1.svg" alt="" class="img-fluid"
                        style="width:100%">
                </div>
            </div>
            <br><br>
            <div class="container d-flex flex-column">
                <div class="col-12">
                    <span>Entre los factores que favorecen las acciones de erradicación en la provincia se
                        destacan:</span>
                    <br>
                    <br>
                    <ul>
                        <li>Las condiciones agroecológicas y geográficas apropiadas para la producción de frutas y
                            hortalizas de excelente calidad.</li>
                        <br>
                        <li>La importante superficie con disponibilidad de agua y con posibilidad de ser incorporada al
                            área
                            productiva frutihortícola.</li>
                        <br>
                        <li>La oferta exportable de productos frutihortícolas frescos para abastecer mercados de fuerte
                            demanda en períodos de contraestación, en el Hemisferio Norte.</li>
                        <br>
                        <li>La ausencia de hospedantes en la flora autóctona que impiden el establecimiento permanente
                            de la
                            plaga.</li>
                        <br>
                        <li>Las zonas desérticas que circundan los oasis productivos y las áreas libres alcanzadas por
                            los
                            Oasis Centro y Sur, impiden la reinfestación natural.</li>
                        <br>
                        <li>La existencia de infraestructura adecuada en ISCAMEN (laboratorios, Bioplanta de Producción
                            de
                            Insectos Estériles, etc.) y recursos humanos profesionales capacitados para el desarrollo de
                            los
                            programas de control y erradicación de plagas.</li>
                        <br>
                        <li>La posibilidad de utilizar puertos del Océano Pacífico cercanos a la región como nuevas vías
                            de
                            comercialización externa de la producción, alternativas a las ya existentes.</li>
                </div>
                </ul>
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                    <div class="contenidoImg col-12 col-lg-6">
                        <img src="imagenes/programasContenido/mosca/acciones2.svg" alt="">
                    </div>
                    <br>
                    <div class="contenidoImg col-12 col-lg-6">
                        <img src="imagenes/programasContenido/mosca/acciones3.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="tituloPrincipal">
                Logros
                <span>alcanzados en la materia</span>
            </div>
            <div class="d-flex flex-column container">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="mb-3 col-12 col-md-12 col-lg-4 d-flex cardPais">
                        <div class="col-6 d-flex justify-content-center">
                            <img src="imagenes/programasContenido/mosca/argentina.png" alt="" class="bandera">
                        </div>
                        <div class="col-6 paises">
                            <span>2002/2006 - SENASA.</span>
                            Reconocimiento de área libre para Valle de Uco y Oasis Sur y Área de escasa prevalencia para
                            los
                            Oasis Norte y Este
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-12 col-lg-4 d-flex cardPais">
                        <div class="col-6 d-flex justify-content-center">
                            <img src="imagenes/programasContenido/mosca/mexico.png" alt="" class="bandera">
                        </div>
                        <div class="col-6 paises">
                            <span>2009 - SENASICA de México.</span>
                            Reconocimiento de área libre a los departamentos del Oasis Sur.
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-12 col-lg-4 d-flex cardPais">
                        <div class="col-6 d-flex justify-content-center">
                            <img src="imagenes/programasContenido/mosca/chile.png" alt="" class="bandera">
                        </div>
                        <div class="col-6 paises">
                            <span>2012 - SAG.</span>
                            Reconocimiento de área libre para Valle de Uco y Oasis Sur.
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-flex flex-column flex-lg-row">
                    <div class="mb-3 col-12 col-md-12 col-lg-4 d-flex cardPais">
                        <div class="col-6 d-flex justify-content-center">
                            <img src="imagenes/programasContenido/mosca/usa.png" alt="" class="bandera">
                        </div>
                        <div class="col-6 paises">
                            <span>2011 - USDA-APHIS EE.UU.</span>
                            Reconocimiento de área libre a los departamentos de Valle de Uco y Oasis Sur.
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-12 col-lg-4 d-flex cardPais">
                        <div class="col-6 d-flex justify-content-center">
                            <img src="imagenes/programasContenido/mosca/china.png" alt="" class="bandera">
                        </div>
                        <div class="col-6 paises">
                            <span>2020 - China.</span>
                            Área a libre a los departamentos del Valle de Uco y Oasis Sur.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <iframe
                src="https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1E9BgSG6kA8BWBC2LldufZT16l2Th7E3rJCnrsinMPEQ&amp;font=Default&amp;lang=en&amp;initial_zoom=2&amp;height=700"
                width="100%" height="700" frameborder="0" allowfullscreen="allowfullscreen">
            </iframe>
        </div>

        <div class="tituloPrincipal">
            ¿Cómo la
            <span>combatimos? - MIP</span>
        </div>
        <div class="container">
            Para la erradicación y control de insectos plaga el ISCAMEN implementa diversos programas combinando
            técnicas que difieren en efectividad y en el impacto que producen en el ecosistema donde se utilizan.
            <br><br>
            El concepto de <span>MANEJO INTEGRADO DE PLAGAS (MIP)</span> supone la combinación de métodos con el objeto
            de lograr mejores resultados con un mínimo impacto ambiental. Se puede definir como el mecanismo en el que
            se evalúan y consolidan, en un programa unificado, todas las técnicas de control disponibles, con el fin de
            manejar las poblaciones de plaga. Se trata de evitar un daño económico, minimizando los efectos secundarios
            sobre el ambiente.
            <br><br>
            El MIP en grandes áreas es llevado adelante por organismos estatales que normalmente se ocupan de plagas
            claves; ya que incluye técnicas de control complejas como es el caso de la Técnica del Insecto Estéril.
        </div>
        <div class="contain d-flex justify-content-center flex-column flex-md-row mt-3">
            <div class="col-12 col-md-4 col-lg-4 d-flex justify-content-center align-items-center ">
                <img src="imagenes/programasContenido/mosca/acciones4.png" alt="" style="width:95%">
            </div>
            <div class="col-12 col-md-7 col-lg-7 d-flex justify-content-center align-items-center">
                <img src="imagenes/programasContenido/mosca/acciones5.png" alt="" style="width:95%">
            </div>
        </div>
    </div>
    <div id="contenido3" class="contenido" style="display: none;">
        <div class="tituloPrincipal">
            TIE -
            <span>Técnica del insecto estéril</span>
        </div>
        <div class="container">
            La mosca del Mediterráneo es una de las plagas con mayor incidencia sobrelas producciones frutihortícolas a
            nivel mundial. En Mendoza se utiliza para su control la <span>Técnica del Insecto Estéril –TIE</span> que
            consiste en la
            cría masiva, esterilización y posterior liberación al medio ambiente de ejemplares machos esterilizados de
            esta especie, los que al cruzarse con hembras fértiles no dejan descendencia.
            <br><br>
            La complejidad de este método de control implica contar con la estructura y el conocimiento necesario que
            permita la cría masiva de insectos susceptibles de ser esterilizados. Por ello, para luchar contra la mosca
            del Mediterráneo, se construyó la Bioplanta de producción de insectos estériles que la provincia de Mendoza
            posee en el Departamento de Santa Rosa, siendo esta Biofábrica una de las más importantes a nivel mundial y
            la primera a nivel de Sud América.
            <br><br>
            Es aplicable a plagas que afectan la agricultura, como así también aquellas que impactan sobre la salud
            humana; el carácter Multipropósito y modular es un gran potencial de la capacidad instalada y permite en la
            actualidad la cría masiva de otros insectos plaga como la mosca Sudamericana de la fruta Anastrepha
            fraterculus y el gusano barrenador del ganado Cochlliomyia hominivorax.
            <br><br>
            A diferencia de los insecticidas, la TIE es más eficiente y efectiva en densidades bajas de la plaga. Sin
            embargo, <span>esta técnica no es una tecnología que se puede aplicar como método único de control, sino que
                es un
                elemento complementario de una estrategia de MIP sostenible y aplicada en áreas extensas.</span>
            <br><br>
            Actualmente existen programas de control y erradicación que utilizan la TIE en Guatemala, Perú, Argentina,
            Portugal, Jordania, Israel, Sud África y Australia.
            <br><br>
            Al menos 28 países han utilizado la TIE a gran escala para la supresión o la erradicación de insectos plaga
            que afectan a la agricultura o a la salud humana y animal.
            <br><br>
            En el mundo, hay  30 centros de producción de insectos estériles con una capacidad total de más de 4 mil
            millones de insectos por semana. Conforme esta tecnología amigable al medioambiente es aplicada a escalas
            mayores y en situaciones diferentes, las perspectivas son excelentes para mejorar la salud animal y humana,
            incrementar la cantidad y calidad de alimentos, fibras, bosques, productos almacenados y fuerza de tiro
            animal
        </div>
        <br><br>
        <div class="container tie">
            <img src="imagenes/programasContenido/mosca/metodo1.png" alt="" style="width:100%">
            <br><br>
            <span>Origen y validación de la Técnica</span>
        </div>
        <div class="container">
            El concepto y la aplicación de la TIE fueron desarrolladas en los años ´50 en Estados Unidos. La plaga
            objetivo fue el gusano barrenador del ganado del nuevo mundo. La capacidad de la TIE para erradicar a un
            insecto fue demostrada en la isla de Curaçao, de donde el gusano barrenador fue eliminado en 1954.
            <br><br>
            Los primeros modelos matemáticos simples que demuestran el impacto de introducir insectos estériles a una
            población de insectos silvestres fueron desarrollados por Edward F. Knipling, un pionero en el desarrollo de
            la Técnica del Insecto Estéril.
            <br><br>
            Cuando un número suficiente de insectos estériles es introducido a una población silvestre en números
            suficientes para superar la tasa natural de incremento de la población, ésta se reducirá inevitablemente,
            resultando en la supresión de la plaga. En algunos casos, cuando las poblaciones silvestres están aisladas y
            las liberaciones de insectos estériles se mantienen constantes, la proporción de insectos estériles contra
            fértiles se incrementa, la densidad de la plaga reduce de manera exponencial hasta que es erradicada,
            creándose un área libre de plagas.
            <br><br>
            Para aplicar la TIE se requiere que un número suficiente de insectos de buena calidad sean criados y
            esterilizados masivamente, bien distribuidos en el campo, y que a su vez sean competitivos, con los insectos
            silvestres en vuelo, búsqueda de pareja, comportamiento de apareo y transferencia de esperma.
            <br><br>
            La TIE tiene que ser aplicada en áreas extensas para que sea efectiva. Como en muchos programas de MIP en
            áreas extensas, la TIE es demandante logísticamente, requiere de conocimientos profundos y de un manejo
            intensivo, del apoyo financiero y a largo plazo de la comunidad y además de una organización fuerte, eficaz
            y bien coordinada.
        </div>
        <div class="container d-flex flex-column flex-md-row">
            <div class="col-12 col-md-6">
                <img src="imagenes/programasContenido/mosca/metodo2.png" alt="" style="width:97%">
            </div>
            <br>
            <div class="col-12 col-md-6">
                <img src="imagenes/programasContenido/mosca/metodo3.png" alt="" style="width:97%">
            </div>
        </div>
        <br><br>
        <div class="container d-flex flex-column-reverse flex-md-row">
            <div class="col-12 col-md-4">
                <img src="imagenes/programasContenido/mosca/metodo4.png" alt="" style="width:98%">
            </div>
            <div class="col-12 col-md-8">
                <span>Ventajas de la TIE</span>
                <ul>
                    <li>Esta técnica es biológica por naturaleza, no tiene un impacto negativo sobre la biodiversidad y
                        no daña
                        el medio ambiente.</li>
                    <li> El uso de agroquímicos se reduce, permitiendo a los enemigos naturales actuar en contra de
                        plagas
                        secundarias.</li>
                    <li> La TIE es específica a nivel de especies y ecológicamente segura, y a diferencia de otros
                        métodos y
                        agentes de control biológico, los insectos estériles liberados no se pueden establecer en el
                        ecosistema
                        y por lo tanto no tienen potencial para causar daños adversos sobre el medio ambiente.</li>
                    <li> Los insectos estériles pueden ser liberados en forma aérea, inclusive desde grandes alturas,
                        resultando
                        en una distribución bastante uniforme. Dada la característica de los insectos de buscar a su
                        pareja para
                        el apareo el control de plagas utilizando este método es factible, aún en lugares de difícil
                        acceso
                        tales como selvas o terreno montañoso o en áreas protegidas.</li>
                    <li> Los insectos estériles pueden ser criados en el país que los requiera y de esta manera se
                        reducen los
                        gastos por importaciones de agroquímicos.</li>
                </ul>
            </div>
        </div>
        <br><br>
        <div class="container d-flex flex-column flex-md-row">
            <div class="col-12 col-md-8">
                <span>Cuándo y dónde es apropiado utilizar la TIE</span>
                <ul>
                    <li>
                        Donde un insecto es una plaga clave de un producto vegetal o animal de importancia
                        económica.</li>
                    <li>
                        Donde acciones de control preventivas contra una especie invasora son justificables.</li>
                    <li>Donde la plaga siempre excede el umbral de daño económico.</li>
                    <li>Donde hay barreras comerciales en la exportación de productos causadas por plagas
                        cuarentenarias,
                        <span>Áreas de baja prevalencia de plagas (ABP)</span> pueden ser establecidas mediante la
                        liberación de insectos
                        estériles con fines de supresión seguido de la aplicación de tratamientos postcosecha. Como
                        alternativa,
                        si la erradicación de la plaga es factible utilizando la TIE, <span>Áreas libres de moscas
                            de la fruta (ALMF)</span>
                        pueden ser establecidas desde donde los productos pueden ser exportados libremente.
                    </li>
                    <li>Donde una plaga es una gran limitante para el desarrollo económico o vector de alguna
                        enfermedad y otros métodos sostenibles de control no están disponibles.</li>
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <img src="imagenes/programasContenido/mosca/metodo5.png" alt="" style="width:100%">
            </div>
        </div>

        <div class="tituloPrincipal">
            Combinamos
            <span>Herramientas</span>
        </div>
        <div class="container">
            El Instituto de Sanidad y Calidad Agropecuaria Mendoza (ISCAMEN) complementa la TIE con el <span>Control
                químico y
                cultural</span> que realizan las <span>Brigadas Fitosanitarias</span>, principalmente en los árboles
            frutales de las zonas
            urbanas.
            <br><br>
            La población puede llamar al ISCAMEN y solicitar el tratamiento gratuito de frutales domiciliarios.
            <br><br>
            El Control Químico está basado en el comportamiento alimenticio de la mosca del Mediterráneo, por lo cual se
            utiliza una mezcla de insecticida y atrayente alimenticio que se denomina insecticida-cebo el cual es
            altamente selectivo.
            <ul>
                <li>El producto que se utiliza es un "cebo específico" para combatir la mosca del Mediterráneo.</li>
                <li>Está compuesto por un insecticida de muy baja toxicidad y un atractivo alimentario (proteína
                    hidrolizada) no tóxico.</li>
                <li>Se aplica en un pequeño sector del árbol frutal a modo de spot.</li>
                <li>Tiene un poder residual de 7 días.</li>
                <li>No presenta riesgo alguno para animales de sangre caliente (hombre y animales domésticos) Una vez
                    realizado el tratamiento, los frutos se pueden consumirprevio lavado.</li>
            </ul>
            El Control Cultural consiste en la recolección y destrucción de los frutos con sospecha de ataque y frutos
            que
            pudiesen haber quedado en la planta desde el ciclo anterior y sirven para hospedar a la plaga en el invierno
            (ej: cítricos).
            <br><br>
            Estas actividades son desarrolladas por personal acreditado por el ISCAMEN y son totalmente gratuitas. Luego
            de
            la recolección y destrucción de frutos de hospedantes en áreas de detección de focos de la plaga, se aplica
            un
            insecticida en el suelo bajo la copa de los árboles donde se hallan encontrado frutos infestados. Con esta
            actividad, se eliminan huevos y larvas que puedan estar presentes en los frutos y en el suelo, con el objeto
            de
            interrumpir el ciclo biológico de la plaga y reducir su capacidad de reproducción.
            <br><br>
            Además productores agrícolas  y propietarios de frutales domiciliarios pueden colaborar al efectuar las
            siguientes operaciones:
            <br><br>
            <span>Campo:</span>
            <ul>
                <li>No deje en la planta los frutos que no se vayan a consumir, a los efectos deevitar la
                    sobremaduración.</li>
                <li>Realice el laboreo superficial del suelo en los meses de invierno, a fin de dejarexpuestas las pupas
                    a la acción del frío, pájaros, hormigas, etc.</li>
                <li>Efectúe riegos por inundación en primavera para favorecer la muerte por asfixia dedichas pupas.</li>
                <li>Realice estas actividades aún en los frutales que no se aprovechan comercialmente (cortinas de
                    membrillo, higueras, nísperos, cítricos, etc.)</li>
            </ul>
            <span>Ciudad:</span>
            <ul>
                <li>No deje frutos maduros en los árboles frutales, ni caídos en el suelo.</li>
                <li>Coséchelos, especialmente los frutales que se encuentran en los patios de las casas.
                </li>
                <li>Si los frutos no se consumen o procesan (conservas o dulces), colóquelos en bolsasde residuos para
                    la posterior entrega al recolector</li>
                <li>Si es posible entiérrelos y cúbralos con una capa de cal o apisone firmemente el suelo.</li>
                <li><span>
                        Llame gratis al 0800 666 4722 y solicite el tratamiento gratuito de frutales
                        domiciliarios.</span></li>
                <li>Permita el ingreso del personal, debidamente acreditado, de las Brigadas Fitosanitarias del ISCAMEN.
                </li>
                <li>
                    Si no aprovecha sus frutales, cámbielos por ornamentales.</li>
            </ul>
            <div class="d-flex flex-column flex-md-row flex-lg-row align-items-center justify-content-center">
                <div class="col-12 col-md-6 col-lg-6"><img src="imagenes/programasContenido/mosca/metodo6.png" alt=""
                        style="width:97%"></div>
                <br>
                <div class="col-12 col-md-6 col-lg-6"><img src="imagenes/programasContenido/mosca/metodo7.png" alt=""
                        style="width:97%"></div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <?php include 'php/footer.php' ?>
</body>

</html>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var botones = document.querySelectorAll('.botonPrograma');

    botones.forEach(function(boton) {
        boton.addEventListener('click', function() {
            var target = this.getAttribute('data-target');
            var contenido = document.querySelector(target);

            // Ocultar todos los contenidos
            document.querySelectorAll('.contenido').forEach(function(cont) {
                cont.style.display = 'none';
            });

            // Mostrar el contenido correspondiente al botón seleccionado
            contenido.style.display = 'block';

            // Eliminar la clase 'botonProgramaSelected' de todos los botones
            botones.forEach(function(boton) {
                boton.classList.remove('botonProgramaSelected');
            });

            // Agregar la clase 'botonProgramaSelected' al botón seleccionado
            this.classList.add('botonProgramaSelected');
        });
    });

    // Mostrar el contenido del primer botón al cargar la página
    document.getElementById('contenido1').style.display = 'block';
    document.getElementById('btn1').classList.add('botonProgramaSelected');
});
document.addEventListener('DOMContentLoaded', function() {
    const cicloDivs = document.querySelectorAll('.ciclo');

    cicloDivs.forEach(div => {
        const cicloImg = div.querySelector('.cicloImg');
        div.addEventListener('click', function() {
            document.getElementById('zoomedImage').src = cicloImg.src;
            document.getElementById('zoomedImageContainer').style.display = 'block';
            document.body.style.overflow = 'hidden';
        });
    });

    document.getElementById('zoomedImageContainer').addEventListener('click', function() {
        this.style.display = 'none';
        document.body.style.overflow = 'auto';
    });

    document.getElementById('closeZoom').addEventListener('click', function(event) {
        event.stopPropagation();
        document.getElementById('zoomedImageContainer').style.display = 'none';
        document.body.style.overflow = 'auto';
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="js/bootstrap.min.js" crossorigin="anonymous">
</script>