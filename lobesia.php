<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lobesia Botrana</title>
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <style>
    .imagenPlagaContainer {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .imagenPlaga {
        transition: filter 0.5s ease;
        /* Transición suave durante 0.5 segundos */
    }

    .imagenPlaga:hover {
        filter: grayscale(100%);
        /* Cambia la imagen a escala de grises al hacer hover */
    }

    #plagaCambiante1 .imagenPlaga:hover {
        filter: none;
        /* Anular el efecto de escala de grises al hacer hover */
    }

    #plagaCambiante1_mobile .imagenPlaga:hover {
        filter: none;
        /* Anular el efecto de escala de grises al hacer hover */
    }

    .hoverLogo {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
        /* El logo estará oculto inicialmente */
        transition: opacity 0.5s ease;
        /* Transición de opacidad */
        max-width: 25%;
        /* Ancho máximo del logo en relación al ancho de la imagen */
        max-height: 25%;
        /* Altura máxima del logo en relación al alto de la imagen */
    }

    .imagenPlagaContainer:hover .hoverLogo {
        opacity: 1;
        /* Mostrar el logo cuando se hace hover en la imagen */
    }

    #plagaCambiante1 .imagenPlagaContainer:hover .hoverLogo {
        opacity: 0;
    }

    #plagaCambiante1_mobile .imagenPlagaContainer:hover .hoverLogo {
        opacity: 0;
    }

    .contenidoImg50 img {
        width: 70%;
        margin-left: 2%;
    }

    @media screen and (max-width:760px) {
        .contenidoImg50 img {
            width: 96%;
            margin: 0;
        }
    }
    </style>
</head>

<body>

    <?php include 'php/header.php' ?>

    <div class="home">
        <img src="imagenes/encabezados/lobesia.png" alt="">
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
            Biologia de la
            <span>Lobesia Botrana</span>
        </div>
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div class="col-12">
                Lobesia botrana es un insecto plaga que genera un fuerte impacto en la actividad vitivinícola.
                <br><br>
                Se trata de una polilla cuyo alimento principal es la vid, por este motivo se la conoce comúnmente como
                "polilla de la vid". Sobre este cultivo desarrolla su ciclo de vida de manera completa, pasando por los
                estados de huevo, larva o gusano, pupa o crisálida y adulto, en cada generación.
                <br><br>
                Pasa el invierno como pupa debajo de las cortezas o en los restos de material de poda; las larvas se
                desarrollan sobre flores, bayas verdes, maduras y en el interior de las mismas. Los adultos colocan los
                huevos sobre flores y frutos, en grupos de 2 ó 3.
                <br><br>
                Cada hembra pone alrededor de 100 huevos y una pareja puede generar al final de la temporada
                aproximadamente 250 mil ejemplares.
                <br><br>
                En Mendoza su control es fundamental porque con más de 160 mil hectáreas implantadas y más de 14 mil
                productores involucrados en la actividad, genera el 75% de la producción nacional.
                <br><br>
                Además, la vitivinicultura cuenta  con más de 400 años de desarrollo en la provincia y actualmente
                produce exportaciones por más de 800 millones de dólares.
            </div>
            <br>
            <div class="contenidoImg col-8 d-flex align-items-center">
                <img src="imagenes/programasContenido/lobesia/plaga1.png" alt="">
            </div>
        </div>

        <div class="tituloPrincipal">
            Ciclo
            <span>Bio-Ecológico</span>
        </div>
        <div class="container">
            <span>Huevos:</span>  Miden algo menos de 1 mm y tienen forma redondeada o apenas alargada. Recién puestos,
            son
            traslúcidos, con brillo y reflejos tornasolados; luego se vuelven color amarillo. Se encuentran sobre los
            frutos en formación, donde parecen pequeñísimas gotas de cera apenas visibles.
            <br><br>
            <span>Larvas:</span> Se encuentran en los racimos y pueden medir entre 1 y 15 mm. Son de coloración verdosa
            (aunque varía
            de amarillo-verdoso a marrón-grisáceo), con la cabeza siempre de color marrón claro. Son móviles y ágiles y,
            al ser molestadas, se descuelgan por medio de un hilo sedoso.
            <br><br>
            <span>Pupas:</span> Son difíciles de localizar, ya que se esconden en la corteza de las cepas, en las hojas
            y en los
            racimos. Están envueltas por un capullo blanco, con brillo sedoso. Son alargadas, miden 0,5 cmde largo y su
            color es marrón.
            <br><br>
            <span>Adulto:</span> Es una mariposa cuyo cuerpo mide alrededor de 6 mm. Sus alas, cuando están desplegadas,
            llegan a
            medir entre 10 y 13 mm. Su primer par de alas es jaspeado, con manchas oscuras en marrón alternando con
            zonas claras. Las alas posteriores son grises y están provistas de flecos grisáceos.
            <br><br>
            Una vez fecundadas las hembras de la primera generación, depositan los huevos aisladamente sobre la corola
            de los botones florales y las siguientes generaciones sobre los racimos. El incremento de los huevos tiene
            lugar al cabo de pocos días. La larva ataca los botones florales, uniéndolos con unos hilos sedosos,
            formando un “glomérulo” fácilmente reconocible. Al final del periodo larvario, la larva teje un capullo, en
            cuyo interior se forma la pupa o crisálida; casi la mitad lo hacen en repliegues de las hojas y el resto en
            la corteza de las cepas, racimos, suelo y otros. Al cabo de 5-10 días salen los nuevos adultos que repiten
            el ciclo, teniendo normalmente 2 ó 3 generaciones al año, aunque pueden tener más, dependiendo de las
            condiciones climáticas y hospedero. En la 2ª y 3ª generación, la puesta tiene lugar sobre bayas verdes o en
            fase de maduración
        </div>
        <br>
        <div class="container">
            FOTOS DE ESTADÍOS
        </div>

        <div class="tituloPrincipal">
            ¿Qué daños
            <span>provoca?</span>
        </div>
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <div class="col-12">
                Se trata de la principal amenaza de la vitivinicultura de Mendoza, ya que puede ocasionar una merma en
                la producción de vid del 50%.
                <br><br>
                Las larvas se alimentan de las flores o de los granos causando el daño. La primera generación de la
                temporada ataca a los grupos de flores (inflorescencias) cubriéndolos además con hilos de seda. Las
                restantes generaciones, provocan daños en las uvas en formación y en los frutos ya desarrollados.
                <br><br>
                Produce daños directos provocando pérdidas en los volúmenes de producción, menor rendimiento por planta
                y afectando la calidad de la fruta tanto para consumo en fresco como para vinificación. Asimismo,
                favorece el ataque de diversos hongos patógenos que provocan la podredumbre del racimo.
                <br><br>
                En uva para vinificar, los residuos que dejan estos hongos transmiten mal olor y sabor a los vinos
                (daños indirectos).
                <br><br>
                Además de los daños productivos y de calidad, esta plaga causa importantes perjuicios económicos a
                través de las regulaciones que imponen los países importadores en el comercio internacional.
            </div>
            <br>
            <div class="contenidoImg d-flex align-items-center justify-content-center col-8">
                <img src="imagenes/programasContenido/lobesia/plaga2.png" alt="">
            </div>
        </div>

        <div class="tituloPrincipal">
            Mecanismos de
            <span>dispersión</span>
        </div>
        <div class="container">
            La principal forma de dispersión de la plaga hacia nuevas regiones es mediante el transporte de productos
            con el organismo vivo o bien por la propia capacidad de volar de los adultos, sumando a esto la incidencia
            de los vientos.
            <br><br>
            En el caso del comercio internacional, la polilla puede diseminarse enforma de pupas que pueden encontrase
            en el material vegetal propagativo. La forma más común de este material son estacas y sarmientos de vid.
            <br><br>
            La dispersión, a través de los adultos, no es tan importante ya que en general no vuelan distancias mayores
            a 80 metros.
            <br><br>
            Las plantas aisladas de vid que existan fuera de las unidades productivas(en casas particulares, por
            ejemplo) representan un foco muy importante de infestación y posterior dispersión de la plaga.
            <br><br>
            En Mendoza la <span>Resolución 29-I-14 del ISCAMEN</span> establece diversas medidas para el movimiento de
            uva, limpieza,
            transporte y otros requisitos a fin de evitar la dispersión de la plaga. Más allá de lo establecido que es
            de cumplimiento obligatorio, es fundamental que todos los participantes en la cadena productiva tomen
            conciencia y adopten prácticas de resguardo, muchas de las cuales son de fácil cumplimiento y de bajo o nulo
            costo.
        </div>
        <br>
        <div>
            <img src="imagenes/programasContenido/lobesia/plaga3.png" alt="" style="width:100%">
        </div>

        <div class="tituloPrincipal">
            Indicadores de
            <span>presencia de la plaga</span>
        </div>
        <div class="lobesia container d-flex justify-content-center align-items-center">
            <div id="plagaCambiante1" class="contenidoImg col-8">
                <div class="imagenPlagaContainer">
                    <img class="imagenPlaga" src="imagenes/programasContenido/lobesia/plagaCambiada1.svg" alt="">
                    <img class="hoverLogo" src="imagenes/programasContenido/lobesia/plagaCambianteHover.svg" alt="Logo">
                </div>
            </div>
            <br>
            <div class="col-4 d-flex flex-column justify-content-around">
                <div id="plagaCambiante2" class="contenidoImg col-12">
                    <div class="imagenPlagaContainer">
                        <img class="imagenPlaga" src="imagenes/programasContenido/lobesia/plagaCambiante2.svg" alt="">
                        <img class="hoverLogo" src="imagenes/programasContenido/lobesia/plagaCambianteHover.svg"
                            alt="Logo">
                    </div>
                </div>
                <br>
                <div id="plagaCambiante3" class="contenidoImg col-12">
                    <div class="imagenPlagaContainer">
                        <img class="imagenPlaga" src="imagenes/programasContenido/lobesia/plagaCambiante3.svg" alt="">
                        <img class="hoverLogo" src="imagenes/programasContenido/lobesia/plagaCambianteHover.svg"
                            alt="Logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="mobileLobesia container d-flex flex-column justify-content-center align-items-center">
            <div id="plagaCambiante1_mobile" class="contenidoImg col-12">
                <div class="imagenPlagaContainer">
                    <img class="imagenPlaga" src="imagenes/programasContenido/lobesia/plagaMobileCambiada1.svg" alt="">
                    <img class="hoverLogo" src="imagenes/programasContenido/lobesia/plagaCambianteHover.svg" alt="Logo">
                </div>
            </div>
            <br>
            <div class="col-12 d-flex justify-content-around">
                <div id="plagaCambiante2_mobile" class="contenidoImg col-6">
                    <div class="imagenPlagaContainer">
                        <img class="imagenPlaga" src="imagenes/programasContenido/lobesia/plagaMobileCambiante2.svg"
                            alt="">
                        <img class="hoverLogo" src="imagenes/programasContenido/lobesia/plagaCambianteHover.svg"
                            alt="Logo">
                    </div>
                </div>
                <br>
                <div id="plagaCambiante3_mobile" class="contenidoImg col-6">
                    <div class="imagenPlagaContainer">
                        <img class="imagenPlaga" src="imagenes/programasContenido/lobesia/plagaMobileCambiante3.svg"
                            alt="">
                        <img class="hoverLogo" src="imagenes/programasContenido/lobesia/plagaCambianteHover.svg"
                            alt="Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contenido2" class="contenido" style="display:none;">
        <div class="tituloPrincipal">
            Programa de
            <span>lucha contra la Lobesia Botrana</span>
        </div>
        <div class="contenidoImg container">
            El propósito de este programa que desarrolla ISCAMEN es controlar la plaga manteniendo las poblaciones del
            insecto por debajo del nivel de daño económico en los cuatro oasis productivos de la provincia. La capacidad
            de  dispersión y reproducción del insecto obliga a realizar un Manejo Integrado de la Plaga, combinando
            herramientas y actores para lograr el mejor resultado con el menor impacto en el ambiente.
            <br><br>
            No hay antecedentes a nivel internacional de campañas de control  que abarquen más de 160 mil hectáreas de
            cultivo y que se desarrollen bajo la premisa del Manejo Integrado en Grandes Áreas, combinando herramientas
            como la capacitación y sensibilización de los productores, alertas para la aplicación de insecticidas
            específicos en momentos oportunos, servicios de aeroaplicaciones de productos específicos en los Oasis
            Norte-Este, aplicación aérea de feromonas y provisión de agroquímicos a productores.
            <br><br>
            Las acciones de control se desarrollan en el marco de la <span>Ley Nacional 27.227</span> que declara de
            interés nacional
            el control de la plaga, la <span>Ley provincial 9.076</span> que declara de interés provincial el control
            del citado
            insecto y el <span>Decreto Provincial 1812/2017</span> que establece la coordinación de acciones conjuntas
            de control por
            parte del Ministerio de Producción, a través del ISCAMEN.
            <br><br>
            <img src="imagenes/programasContenido/lobesia/acciones1.png" alt="">
        </div>

        <div class="tituloPrincipal">
            ¿Como la
            <span>combatimos? - MIP</span>
        </div>
        <div class="container d-flex flex-column flex-md-row flex-lg-row">
            <div class="col-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                Para la erradicación y control de insectos plaga el ISCAMEN implementa diversos programas combinando
                técnicas que difieren en efectividad y en el impacto que producen en el ecosistema donde se utilizan.
                <br><br>
                El concepto de <span>Manejo Integrado de Plagas (MIP)</span> supone la combinación de métodos con el
                objeto de lograr
                mejores resultados con un mínimo impacto ambiental. Se puede definir como el mecanismo en el que se
                evalúan
                y consolidan, en un programa unificado, todas las técnicas de control disponibles, con el fin de manejar
                las
                poblaciones de plaga. Se trata de evitar un daño económico, minimizando los efectos secundarios sobre el
                ambiente.
                <br><br>
                El MIP en grandes áreas es llevado adelante por organismos estatales que normalmente se ocupan de plagas
                claves; ya que incluye técnicas de control complejas.
                <br><br>
            </div>
            <div class="d-flex flex-column justify-content-center col-12 col-md-5 col-lg-5">
                <div class="contenidoImg50 d-flex justify-content-center col-12">
                    <img src="imagenes/programasContenido/lobesia/acciones2.png" alt="">
                </div>
                <br>
                <div class="contenidoImg50 d-flex justify-content-center col-12">
                    <img src="imagenes/programasContenido/lobesia/acciones3.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="contenido3" class="contenido" style="display:none;">
        <div class="tituloPrincipal">
            TCS -
            <span>Técnica de Confusión Sexual</span>
        </div>
        <div class="container">
            La Confusión Sexual es la perturbación de la atracción sexual de los machos hacia las hembras, provocada
            por
            la impregnación en el aire de una feromona que emiten los difusores. Los difusores liberan feromona
            generando una nube que produce en los machos confusión ya que no pueden percibir el olor - la feromona -
            que
            liberan las hembras vírgenes, por lo que no las encuentran para producir la cópula. Evitando la
            incubación
            por parte de la hembra.
            <br><br>
        </div>
        <div class="container d-flex flex-column flex-md-row flex-lg-row">
            <div class="col-12 col-md-6 col-lg-6">
                <span>Implementación</span>
                <br><br>
                <ul>
                    <li>La distribución de los difusores debe ser homogénea en toda la finca.</li>
                    <br>
                    <li>Los difusores deben colocarse antes del inicio de la floración y del primer vuelo de la plaga.
                        Es
                        importante respetar la dosis indicada por hectárea.</li>
                    <br>
                    <li>En la planta, los difusores se colocan en el cargador o en el pitón, en la parte más alta
                        posible,
                        dado que la nube de feromona tiende a bajar por efectos de la gravedad. La nube de feromona es
                        mucho
                        más densa que el aire.</li>
                    <br>
                    <li>
                        Aumentar la cantidad de difusores por hectárea no implica un mejor control, solamente acarrea un
                        aumento de los costos. Colocar menos difusores de los recomendados por hectárea, baja
                        notablemente
                        la efectividad de la técnica y el control.</li>
                </ul>
            </div>
            <div class="contenidoImg d-flex flex-column justify-content-center col-12 col-md-6 col-lg-6">
                <img src="imagenes/programasContenido/lobesia/metodo1.png" alt="">
                <br>
            </div>
        </div>
        <div class="container d-flex flex-column flex-md-row flex-lg-row">
            <div class="col-12 col-md-6 col-lg-6">
                <span>Ventajas de la Técnica.</span>
                <br><br>
                <ul>
                    <li>El uso de técnicas específicas y no contaminantes como la Confusión Sexual, permite disminuir
                        los
                        riesgos a la hora de combatir plagas agrícolas.</li>
                    <br>
                    <li>El período de protección del cultivo es de 180 a 200 días (suficiente para protegerlo durante la
                        temporada)</li>
                    <br>
                    <li>No es contaminante por lo tanto no produce impacto ambiental</li>
                    <br>
                    <li>No genera resistencia, no afecta a la fauna benéfica y evita la aparición de plagas inducidas
                        por
                        aplicaciones sucesivas de insecticidas.</li>
                </ul>
            </div>
            <div class="contenidoImg d-flex flex-column justify-content-center col-12 col-md-6 col-lg-6">
                <img src="imagenes/programasContenido/lobesia/metodo2.png" alt="">
            </div>
        </div>
        <div class="tituloPrincipal">
            Combinamos
            <span>Herramientas</span>
        </div>
        <div class="container">
            El Instituto de Sanidad y Calidad Agropecuaria Mendoza (ISCAMEN) complementa el uso de feromonas de
            confusión sexual, en el marco de un manejo integrado, con otras herramientas como la  provisión de
            agroquímicos específicos y de bajo impacto ambiental, avisos de alertas para emplear los productos en
            momentos indicados y el Servicio de Aeroaplicaciones con productos específicos y feromona líquida
            asperjable.
        </div>
        <div class="container d-flex flex-column flex-md-row flex-lg-row">
            <div class="col-12 col-md-6 col-lg-6">
                <span>Servicio de Tratamientos Aéreos</span>
                <br><br>
                Implica la pulverización desde el aire, con productos fitosanitarios autorizados o feromonas
                pulverizables,
                de conformidad con las condiciones de uso previstas por las empresas fabricantes de los productos a
                aplicar
                para elcontrol de una plaga específica, en este caso Lobesia botrana.
                <br><br>
                Para el <span>Servicio de Tratamientos Aéreos</span> que realiza el ISCAMEN se priorizan fincas en
                estado de abandono,
                semiabandono o con riesgo fitosanitario <span>y son un servicio complementario a los tratamientos intra
                    finca que
                    deben realizar los productores.</span>
                <br><br>
                Esta acción de control ha resultado de suma relevancia en áreas extensas de cultivo como lo es el Oasis
                Norte-Este de la provincia de Mendoza, donde conviven viñedos en plena producción con numerosos viñedos
                en
                estado de abandono y/o bajo un importante descuido fitosanitario.
                <br><br>
                Según relevamientos del Programa, aproximadamente unas 80.000 hectáreas de viñedos de los Oasis
                Norte-Este
                de Mendoza están en condiciones de ser tratados bajo esta modalidad de aplicación, mientras que la
                superficie restante se encuentra en situaciones complejas respecto a los riesgos operativos que supone
                la
                tarea de una pulverización aérea.
                <br><br>
                Los productos que se aplican son de una especificidad tan elevada que junto a los niveles de dilución
                empleados en el caldo que asperjan los aviones, son suficientemente efectivos para el control de Lobesia
                botrana, pero garantizan la ausencia de efectos sobre las personas, animales de sangre caliente, abejas
                u
                otros órdenes de insectos queno pertenecen al orden lepidóptera (polillas).
                <br><br>
                Esta herramienta permite cubrir grandes superficies en poco tiempo, se disminuyen los volúmenes de
                aplicación por unidad de superficie y se reducen los puntos de preparación de caldos por cada hectárea.
                <br><br>
                <span>Estas acciones cuentan con la Declaración de impacto ambiental de la Secretaría de Ambiente y
                    Ordenamiento
                    Territorial de la provincia de Mendoza através de la Resolución 449/18 de dicho organismo.</span>
            </div>
            <br>
            <div class="contenidoImg d-flex align-items-center justify-content-center col-12 col-md-6 col-lg-6">
                <img src="imagenes/programasContenido/lobesia/metodo3.png" alt="">
            </div>
        </div>
        <div class="container">
            <br>
            <span>Alertas Fitosanitarias</span>
            <br><br>
            Todos los productores (incluso aquellos que aplican la técnica de confusión sexual o reciben el servicio de
            tratamientos aéreos) deben aplicar insecticidas para el control de Lobesia botrana cuando sus variedades de
            vid presenten racimos pre-florales (antes de la apertura de flores) de 5-7 cm en promedio.
            <br><br>
            El Programa emitirá una alerta fitosanitaria a través de su página oficial www.iscamen.com.ar solo a modo de
            recordatorio respecto al momento de control indicado. La protección del cultivo con insecticida debe
            mantenerse desde el momento fenológico indicado y hasta principios de noviembre como referencia.
            <br><br>
            <span>Control Legal</span>
            <br><br>
            Es importante que el sector productivo realice acciones preventivas a finde evitar la dispersión de la plaga
            hacia zonas con menor incidencia como por ejemplo el Oasis Sur de Mendoza; para este fin se encuentra en
            funcionamiento un puesto de control fitosanitario transitorio ubicado en la intersección de las rutas 40 y
            143, en la localidad de Pareditas, San Carlos; el cual inspecciona exclusivamente cargas comerciales y busca
            proteger la situación sanitaria de los departamentos de San Rafael y General Alvear.
            <br><br>
            <span>Medidas de control preventivas en época de cosecha – Actores y responsabilidades</span>
            <br><br>
            Es fundamental que todos los participantes en la cadena productiva tomen conciencia y adopten prácticas de
            resguardo, muchas de las cuales son de fácil cumplimiento y de bajo o nulo costo.
            <br><br>
        </div>
        <div class="container d-flex flex-column flex-md-row flex-lg-row">
            <div class=" col-12 col-md-6 col-lg-6">
                <span>Productor</span>
                <br>
                <ul>
                    <li>No realizar tratamientos generalizados antes de cosecha.</li>
                    <br>
                    <li>Tener especial cuidado en la cosecha, ya que la plaga se refugia en elementos como tachos,
                        tijeras, carpas y ropas de los operarios.</li>
                    <br>
                    <li>Proteger la finca, verificando la desinsectación correcta de elementos de cosecha que ingresan a
                        la misma.</li>
                    <br>
                    <li>Exigir que los camiones se retiren de la finca con la carga cubierta.</li>
                    <br>
                    <li>Impedir que camiones, envases o máquinas cosechadoras ingresen a la propiedad con restos
                        vegetales.</li>
                    <br>
                    <li>Toda maquinaria agrícola utilizada en la cosecha de uva debe circular libre de residuos
                        vegetales. Antes de retirarla de la finca debe realizarse la limpieza de la misma. Asesorarse
                        técnicamente ante cualquier inquietud.</li>
                    <br>
                    <li>Post cosecha: Descargar y destruir la fruta remanente después de la cosecha dentro del mismo
                        predio. Al podar, destruir los remanentes de la poda dentro de la misma finca.</li>
                    <br>
                </ul>
                <span>Bodegas</span>
                <br><br>
                <ul>
                    <li>Las bodegas deben proceder a la destrucción de escobajos, orujos y otros subproductos obtenidos
                        del proceso industrial.</li>
                    <br>
                    <li>Luego de la descarga de la uva en las bodegas, mosteras o galpones (uva de mesa), tanto el
                        camión como los envases deben retirarse libres de restos vegetales.</li>
                    <br>
                    <li>El establecimiento es responsable de la operación de lavado.</li>
                    <br>
                </ul>
                Los usuarios de cualquier tipo de envases contenedores de uva para cosecha y acarreo deben lavarlos con
                agua a presión. Todo contenedor utilizado para el traslado hacia bodegas como tachos, bandejas, cajas
                cosecheras de distintos materiales, bienes, gamelas –sin importar el lugar de procedencia de la uva–debe
                ser sometido a esa práctica previo a su egreso de los establecimientos elaboradores. Igual procedimiento
                debe realizarse con la carpa del camión, así como retirar restos de racimos de las barandas, buches y
                cadenas, en caso de cargas realizadas a granel.
                <br><br>
            </div>
            <div
                class="contenidoImg d-flex flex-column justify-content-center align-items-center col-12 col-md-6 col-lg-6">
                <img src="imagenes/programasContenido/lobesia/metodo4.png" alt="">
                <br>
                <img src="imagenes/programasContenido/lobesia/metodo5.png" alt="">
            </div>
        </div>
        <div class="container contenidoImg">
            <br><br>
            <span>Transportistas</span>
            <br><br>
            <ul>
                <li>Todo movimiento de uva desde la finca hasta la bodega, acopio y/o empaque, cualquiera sea su envase
                    contenedor, debe ser cubierto en su totalidad con carpa o malla de trama 80%. Si la carga es a
                    granel, debe quedar un espacio de al menos 10 centímetros entre la parte superior de la carga y el
                    borde de labaranda.</li>
                <br>
                <li>Queda restringido el traslado de uva en fresco, cualquiera sea su tipo, desde el oasis Norte o Este
                    hacia el Valle de Uco o Sur y desde el Valle de Uco hacia el oasis Sur de Mendoza.</li>
                <br>
                <li>
                    Los traslados podrán realizarse llevando a cabo el proceso de obtención del mosto (descobajado,
                    molienda, escurrido y prensado) dentro de los oasis de origen de la uva, para luego realizar el
                    traslado del mosto virgen y/o en fermentación obtenido de uvas blancas o mezclas. En estos casos, el
                    mosto deberá estar libre de restos sólidos, como orujos y escobajos que podrían constituir un medio
                    de dispersión de Lobesia botrana.</li>
                <br>
                <li>Las uvas tintas pueden trasladarse molidas con los orujos para su fermentación.</li>
                <br>
                <li>En este sentido, las Barreras Sanitarias internas de Zapata, Tupungato y Pareditas realizan acciones
                    para cumplimentar estas medidas.</li>
                <br>
                <li>El operativo de limpieza de todo material de transporte es responsabilidad tanto de la bodega como
                    del transportista, que debe transitar con los envases limpios, sin restos vegetales y con el
                    correspondiente certificado entregado por la bodega, exclusivo para esa carga. El mismo criterio
                    deben seguir acopiadores y/o empacadores y transportistas.</li>
                <br>
            </ul>
            <div class="contenidoImg col-12">
                <img src="imagenes/programasContenido/lobesia/metodo6.png" alt="">
            </div>
        </div>
        <br>
        <div class="container d-flex flex-column flex-md-row flex-lg-row">
            <div class="col-12 col-md-6 col-lg-6">
                <span>Máquinas cosechadoras</span>
                <br><br>
                <ul>
                    <li>Es obligación lavar con agua a presión en cada finca las maquinarias utilizadas, especialmente
                        las cosechadoras mecánicas, previo al egreso de la misma.</li>
                    <br>
                    <li>Las máquinas cosechadoras que trabajen en los oasis Norte y Este y se dirijan a otra provincia o
                        hacia Valle de Uco y sur de Mendoza, deben realizar la desinsectación en la sede de ISCAMEN
                        ubicada en Km 8 (Guaymallén), donde se emite un certificado de desinfección. Ese procedimiento
                        también lo deben realizar aquellos usuarios de maquinarias que hayan prestado servicio en el
                        Valle de Uco y se dirijan al oasis Sur o a otra provincia.</li>
                    <br>
                    <li>La desinsectación obligatoria para la maquinaria de cosecha de uva debe realizarse, previo
                        pedido de turno, en el Centro de Desinsectación que el ISCAMEN (ubicado en Silvano Rodríguez
                        S/N, Km 8 – Guaymallén).</li>
                    <br>
                    <li>Los propietarios, usuarios o tenedores por cualquier título de maquinarias deben presentar al
                        ISCAMEN un plan de trabajo quincenal, mientras que los costos de la desinsectación de
                        maquinarias quedan a cargo de los interesados.</li>
                </ul>
                <br>
            </div>
            <div class="contenidoImg d-flex align-items-center justify-content-center col-12 col-md-6 col-lg-6">
                <img src="imagenes/programasContenido/lobesia/metodo7.png" alt="">
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
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("plagaCambiante2").addEventListener("click", function() {
        intercambiarImagen("plagaCambiante2", "plagaCambiante1");
    });

    document.getElementById("plagaCambiante3").addEventListener("click", function() {
        intercambiarImagen("plagaCambiante3", "plagaCambiante1");
    });

    function intercambiarImagen(id1, id2) {
        var img1Src = document.getElementById(id1).querySelector('img').src;
        var img2Src = document.getElementById(id2).querySelector('img').src;

        var img1Num = obtenerNumeroImagen(img1Src);
        var img2Num = obtenerNumeroImagen(img2Src);

        // Cambiar solo el número en el src
        var nuevaImg1Src = img1Src.replace(img1Num, img2Num);
        var nuevaImg2Src = img2Src.replace(img2Num, img1Num);

        document.getElementById(id1).querySelector('img').src = nuevaImg1Src;
        document.getElementById(id2).querySelector('img').src = nuevaImg2Src;
    }

    function obtenerNumeroImagen(src) {
        // Utilizando una expresión regular para extraer solo los números del src
        var matches = src.match(/(\d+)\.svg$/);
        if (matches) {
            return matches[1];
        } else {
            return null;
        }
    }
});
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("plagaCambiante2_mobile").addEventListener("click", function() {
        intercambiarImagen("plagaCambiante2_mobile", "plagaCambiante1_mobile");
    });

    document.getElementById("plagaCambiante3_mobile").addEventListener("click", function() {
        intercambiarImagen("plagaCambiante3_mobile", "plagaCambiante1_mobile");
    });

    function intercambiarImagen(id1, id2) {
        var img1Src = document.getElementById(id1).querySelector('img').src;
        var img2Src = document.getElementById(id2).querySelector('img').src;

        var img1Num = obtenerNumeroImagen(img1Src);
        var img2Num = obtenerNumeroImagen(img2Src);

        // Cambiar solo el número en el src
        var nuevaImg1Src = img1Src.replace(img1Num, img2Num);
        var nuevaImg2Src = img2Src.replace(img2Num, img1Num);

        document.getElementById(id1).querySelector('img').src = nuevaImg1Src;
        document.getElementById(id2).querySelector('img').src = nuevaImg2Src;
    }

    function obtenerNumeroImagen(src) {
        // Utilizando una expresión regular para extraer solo los números del src
        var matches = src.match(/(\d+)\.svg$/);
        if (matches) {
            return matches[1];
        } else {
            return null;
        }
    }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="js/bootstrap.min.js" crossorigin="anonymous">
</script>