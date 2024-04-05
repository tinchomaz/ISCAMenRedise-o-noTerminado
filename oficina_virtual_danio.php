<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoridades</title>
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    .redireccion {
        text-decoration: none;
        color: #618140;
    }
    </style>
</head>

<body>

    <?php include 'php/header.php' ?>

    <br><br><br>
    <div class="tituloPrincipal">Pedido de Certificaci&oacute;n de Da&ntilde;os</div>
    <div class="container">
        <div>
            <div>

                <br>
                <a style="font-size:20px" target="_blank"
                    href="docs/difusion/control_incruento_catas.pdf" class="redireccion">M&eacute;todos de Control Incruento</a>
                <br>
                <br>
                <label>Ingrese el RUT/RENSPA de la propiedad afectada:</label>
                <input type='text' placeholder="13 digitos consecutivos sin espacios" size="40" name='txtRut'
                    id='txtRut' value='' required class="w-30">
                <input id="btBuscarRut" type='button' style="color:white; background-color:green" value='Buscar'
                    name='boton' onclick="buscarDatosXRut()">
                <br>
                <br>
                <div id="resultados"></div>

                <form id="pedidoform" style="display:none;" onsubmit="return checkSubmit();"
                    class="form-box register-form contact-form contacto" method="POST">
                    <table>
                        <tr>
                            <td><label>Fecha Siniestro: <span class="required">*</span></label></td>
                            <td><input size="30" style="line-height: 40px;" type='date' name='fechaSiniestro'
                                    id='fechaSiniestro' value='' required> </td>
                            <td><label>Caracter Solicitante: <span class="required">*</span></label></td>
                            <td>
                                <select id="caracterSolicitante" name="caracterSolicitante">
                                    <option value="TIT">Titular</option>
                                    <option value="ADM">Administrador</option>
                                    <option value="ARR">Arrendatario</option>
                                    <option value="CON">Contratista</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Nombre Solicitante: <span class="required">*</span></label></td>
                            <td><input maxlength="100" size="30" type='text' name='nombreSolicitante'
                                    id='nombreSolicitante' value='' required> </td>
                            <td><label>Apellido Solicitante: <span class="required">*</span></label></td>
                            <td><input maxlength="100" type='text' size="30" id='apellidoSolicitante'
                                    name='apellidoSolicitante' value='' required></td>
                        </tr>
                        <tr>
                            <td><label>DNI/CUIT (sin guiones): <span class="required">*</span></label></td>
                            <td><input maxlength="20" size="30" type='number' name='dniCuit' id='dniCuit' value=''
                                    required> </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label>Lindero Norte: <span class="required">*</span></label></td>
                            <td><input maxlength="254" size="30" type='text' name='linderoNorte' id='linderoNorte'
                                    value='' required> </td>
                            <td><label>Lindero Sur: <span class="required">*</span></label></td>
                            <td><input maxlength="254" type='text' size="30" id='linderoSur' name='linderoSur' value=''
                                    required></td>
                        </tr>
                        <tr>
                            <td><label>Lindero Este: <span class="required">*</span></label></td>
                            <td><input maxlength="254" size="30" type='text' name='linderoEste' id='linderoEste'
                                    value='' required> </td>
                            <td><label>Lindero Oeste: <span class="required">*</span></label></td>
                            <td><input maxlength="254" type='text' size="30" id='linderoOeste' name='linderoOeste'
                                    value='' required></td>
                        </tr>
                        <tr>
                            <td><label>Nombre Contacto Autorizado en Finca: <span class="required">*</span></label>
                            </td>
                            <td><input maxlength="100" size="30" type='text' name='personaTasacion' id='personaTasacion'
                                    value='' required> </td>
                            <td><label>Telefono Contacto Autorizado en Finca: <span class="required">*</span></label>
                            </td>
                            <td><input maxlength="50" type='number' size="30" id='telefonoTasacion'
                                    name='telefonoTasacion' value='' required></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <label>Referencia Acceso: <span class="required">*</span></label>
                                <textarea maxlength="511" required="" rows='2' class='form-control'
                                    id='referenciaAcceso' name='referenciaAcceso'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <label>Cultivos Afectados por las Catas: <span class="required">*</span></label>
                                <textarea maxlength="511" required="" rows='2' class='form-control'
                                    id='cultivosAfectados' name='cultivosAfectados'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <label>Aplica Metodos de Tratamiento contra las Catas?. Indicar Cuales si la
                                    respuesta es afirmativa: <span class="required">*</span></label>
                                <textarea maxlength="511" required="" rows='2' class='form-control'
                                    id='metodosTratamiento' name='metodosTratamiento'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <label>Ubicaci&oacute;n Zonas Afectadas en la Propiedad (marque una o m$aacute;s
                                    zonas): <span class="required">*</span></label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center">
                                <table border="1" style="border-collapse:collapse;">
                                    <tr>
                                        <td align="center" width="33%">Noroeste<br><input id="zno" name="zno"
                                                type="checkbox" /></td>
                                        <td align="center" width="33%">Norte<br><input id="zn" name="zn"
                                                type="checkbox" /></td>
                                        <td align="center" width="33%">Noreste<br><input id="zne" name="zne"
                                                type="checkbox" /></td>
                                    </tr>
                                    <tr>
                                        <td align="center">Oeste<br><input id="zo" name="zo" type="checkbox" /></td>
                                        <td align="center">Centro<br><input id="zc" name="zc" type="checkbox" />
                                        </td>
                                        <td align="center">Este<br><input id="ze" name="ze" type="checkbox" /></td>
                                    </tr>
                                    <tr>
                                        <td align="center">Suroeste<br><input id="zso" name="zso" type="checkbox" />
                                        </td>
                                        <td align="center">Sur<br><input id="zs" name="zs" type="checkbox" /></td>
                                        <td align="center">Sureste<br><input id="zse" name="zse" type="checkbox" />
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <div class="clearfix"></div>
                    <div class="buttons-box clearfix" style="text-align: center;">
                        <!-- <button name="boton" type='submit' id="submit" class="btn btn-default">Enviar</button> -->
                        <input id="btGuardar" type='button'
                            style="color:white; background-color:green; min-height: 50px;" value='Guardar Pedido'
                            name='boton' onclick="guardarPedido()">
                        <span class="required"><b>*</b> Campos obligatorios</span>
                    </div><!-- .buttons-box -->
                </form>
                <div id="resultadosSave"></div>
                <?php
				
				?>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <?php include 'php/footer.php' ?>

</body>

</html>
<script>
var validado = false;

function buscarDatosXRut() {

    if (document.getElementById('txtRut').value == '') {
        $("#resultados").html('<b style="color:red">Debe ingresar un valor para el campo RUT/Renspa</b>');
        return false;
    }

    $.ajax({
        async: true,
        type: "POST",
        url: "certificacion_danio_ajx.php",
        data: ({
            accion: "buscar",
            Consultar_renspa: document.getElementById('txtRut').value
        }),
        context: document.body,
        beforeSend: inicioEnvio,
        success: function(response) {
            if (response.indexOf('Fallo') > -1) {
                $("#resultados").html(response);
                document.getElementById('pedidoform').style.display = 'none';
            } else if (response.indexOf('messageError') > -1 || response.indexOf('Fatal error') > -1) {
                $("#resultados").text("Error en la busqueda");
                document.getElementById('pedidoform').style.display = 'none';
            } else {
                document.getElementById('txtRut').value = '';
                document.getElementById('pedidoform').style.display = '';
                document.getElementById('pedidoform').reset();

                $("#resultados").html(response);
            }
        },
        failued: function() {
            alert("Error: Intente de nuevo por favor");
            document.getElementById('pedidoform').style.display = 'none';
        },
        error: problemas
    });
    return true;
}

function guardarPedido() {

    if (document.getElementById('idrut').value == '0') {
        if (document.getElementById('nombrePropiedad').value == '') {
            alert('Debe ingresar un valor para el campo Nombre de Propiedad');
            return false;
        }
        if (document.getElementById('nombreTitular').value == '') {
            alert('Debe ingresar un valor para el campo Apellido y Nombre del Titular');
            return false;
        }
        if (document.getElementById('cuitTitular').value == '') {
            alert('Debe ingresar un valor para el campo CUIT Titular');
            return false;
        }
        if (document.getElementById('calleNroPropiedad').value == '') {
            alert('Debe ingresar un valor para el campo Calle y Numero de la Propiedad');
            return false;
        }
        if (document.getElementById('localidadPropiedad').value == '') {
            alert('Debe ingresar un valor para el campo Localidad Propiedad');
            return false;
        }
        if (document.getElementById('dptoPropiedad').value == '') {
            alert('Debe ingresar un valor para el campo Departamento Propiedad');
            return false;
        }
    }

    if (document.getElementById('fechaSiniestro').value == '') {
        alert('Debe ingresar un valor para el campo Fecha de Siniestro');
        return false;
    }
    if (document.getElementById('apellidoSolicitante').value == '') {
        alert('Debe ingresar un valor para el campo Apellido Solicitante');
        return false;
    }
    if (document.getElementById('nombreSolicitante').value == '') {
        alert('Debe ingresar un valor para el campo Nombre Solicitante');
        return false;
    }
    if (document.getElementById('dniCuit').value == '') {
        alert('Debe ingresar un valor para el campo DNI/CUIT');
        return false;
    }
    if (document.getElementById('linderoNorte').value == '') {
        alert('Debe ingresar un valor para el campo Lindero Norte');
        return false;
    }
    if (document.getElementById('linderoSur').value == '') {
        alert('Debe ingresar un valor para el campo Lindero Sur');
        return false;
    }
    if (document.getElementById('linderoEste').value == '') {
        alert('Debe ingresar un valor para el campo Lindero Este');
        return false;
    }
    if (document.getElementById('linderoOeste').value == '') {
        alert('Debe ingresar un valor para el campo Lindero Oeste');
        return false;
    }
    if (document.getElementById('personaTasacion').value == '') {
        alert('Debe ingresar un valor para el campo Persona Tasacion');
        return false;
    }
    if (document.getElementById('telefonoTasacion').value == '') {
        alert('Debe ingresar un valor para el campo Telefono Tasacion');
        return false;
    }
    if (document.getElementById('referenciaAcceso').value == '') {
        alert('Debe ingresar un valor para el campo Referencia de Acceso');
        return false;
    }
    if (document.getElementById('cultivosAfectados').value == '') {
        alert('Debe ingresar un valor para el campo Cultivos Afectados');
        return false;
    }
    if (document.getElementById('metodosTratamiento').value == '') {
        alert('Debe ingresar un valor para el campo Metodos de Tratamiento');
        return false;
    }

    var zonasAfectadasParcela = '';
    if (document.getElementById('zno').checked) {
        zonasAfectadasParcela += "zno";
    }
    if (document.getElementById('zn').checked) {
        zonasAfectadasParcela += zonasAfectadasParcela != "" ? "-" : "";
        zonasAfectadasParcela += "zn";
    }
    if (document.getElementById('zne').checked) {
        zonasAfectadasParcela += zonasAfectadasParcela != "" ? "-" : "";
        zonasAfectadasParcela += "zne";
    }
    if (document.getElementById('zo').checked) {
        zonasAfectadasParcela += zonasAfectadasParcela != "" ? "-" : "";
        zonasAfectadasParcela += "zo";
    }
    if (document.getElementById('zc').checked) {
        zonasAfectadasParcela += zonasAfectadasParcela != "" ? "-" : "";
        zonasAfectadasParcela += "zc";
    }
    if (document.getElementById('ze').checked) {
        zonasAfectadasParcela += zonasAfectadasParcela != "" ? "-" : "";
        zonasAfectadasParcela += "zne";
    }
    if (document.getElementById('zso').checked) {
        zonasAfectadasParcela += zonasAfectadasParcela != "" ? "-" : "";
        zonasAfectadasParcela += "zso";
    }
    if (document.getElementById('zs').checked) {
        zonasAfectadasParcela += zonasAfectadasParcela != "" ? "-" : "";
        zonasAfectadasParcela += "zs";
    }
    if (document.getElementById('zse').checked) {
        zonasAfectadasParcela += zonasAfectadasParcela != "" ? "-" : "";
        zonasAfectadasParcela += "zse";
    }
    if (zonasAfectadasParcela == '') {
        alert('Debe ingresar marcar al menos una zona afectada');
        return false;
    }


    var peticion = null;
    if (document.getElementById('idrut').value == '0') {
        return insertarDatosSinRUTAsociado(zonasAfectadasParcela);
    } else {
        return insertarDatosConRUTAsociado(zonasAfectadasParcela);
    }


}

function insertarDatosSinRUTAsociado(zonasAfectadasParcela) {
    $.ajax({
        async: true,
        type: "POST",
        url: "certificacion_danio_ajx.php",
        data: ({
            accion: "insert",
            idrut: document.getElementById('idrut').value,
            rutRenspa: document.getElementById('rutRenspa').value,
            nombrePropiedad: document.getElementById('nombrePropiedad').value,
            nombreTitular: document.getElementById('nombreTitular').value,
            cuitTitular: document.getElementById('cuitTitular').value,
            calleNroPropiedad: document.getElementById('calleNroPropiedad').value,
            localidadPropiedad: document.getElementById('localidadPropiedad').value,
            dptoPropiedad: document.getElementById('dptoPropiedad').value,
            fechaSiniestro: document.getElementById('fechaSiniestro').value,
            caracterSolicitante: document.getElementById('caracterSolicitante').value,
            apellidoSolicitante: document.getElementById('apellidoSolicitante').value,
            nombreSolicitante: document.getElementById('nombreSolicitante').value,
            dniCuit: document.getElementById('dniCuit').value,
            linderoNorte: document.getElementById('linderoNorte').value,
            linderoSur: document.getElementById('linderoSur').value,
            linderoEste: document.getElementById('linderoEste').value,
            linderoOeste: document.getElementById('linderoOeste').value,
            personaTasacion: document.getElementById('personaTasacion').value,
            telefonoTasacion: document.getElementById('telefonoTasacion').value,
            referenciaAcceso: document.getElementById('referenciaAcceso').value,
            cultivosAfectados: document.getElementById('cultivosAfectados').value,
            metodosTratamiento: document.getElementById('metodosTratamiento').value,
            zonasAfectadas: zonasAfectadasParcela
        }),
        context: document.body,
        beforeSend: inicioEnvio,
        success: function(response) {
            if (response.indexOf('messageError') > -1 || response.indexOf('Fatal error') > -1) {
                alert("Error en el Envio: " + response);
            } else {
                alert(
                    "El Pedido de Certificaci\u00f3n de Da\u00f1o fue enviado Correctamente, nos comunicaremos a la brevedad con usted"
                );
                document.location.href = "certificacion_danio.php";
            }

        },
        failued: function() {
            alert("Error: Intente de nuevo por favor");
        },
        error: problemas
    });
    return true;
}

function insertarDatosConRUTAsociado(zonasAfectadasParcela) {
    $.ajax({
        async: true,
        type: "POST",
        url: "certificacion_danio_ajx.php",
        data: ({
            accion: "guardar",
            idrut: document.getElementById('idrut').value,
            fechaSiniestro: document.getElementById('fechaSiniestro').value,
            caracterSolicitante: document.getElementById('caracterSolicitante').value,
            apellidoSolicitante: document.getElementById('apellidoSolicitante').value,
            nombreSolicitante: document.getElementById('nombreSolicitante').value,
            dniCuit: document.getElementById('dniCuit').value,
            linderoNorte: document.getElementById('linderoNorte').value,
            linderoSur: document.getElementById('linderoSur').value,
            linderoEste: document.getElementById('linderoEste').value,
            linderoOeste: document.getElementById('linderoOeste').value,
            personaTasacion: document.getElementById('personaTasacion').value,
            telefonoTasacion: document.getElementById('telefonoTasacion').value,
            referenciaAcceso: document.getElementById('referenciaAcceso').value,
            cultivosAfectados: document.getElementById('cultivosAfectados').value,
            metodosTratamiento: document.getElementById('metodosTratamiento').value,
            zonasAfectadas: zonasAfectadasParcela
        }),
        context: document.body,
        beforeSend: inicioEnvio,
        success: function(response) {
            if (response.indexOf('messageError') > -1 || response.indexOf('Fatal error') > -1) {
                alert("Error en el Envio: " + response);
            } else {
                alert(
                    "El Pedido de Certificaci\u00f3n de Da\u00f1o fue enviado Correctamente, nos comunicaremos pronto con usted"
                );
                document.location.href = "certificacion_danio.php";
            }

        },
        failued: function() {
            alert("Error: Intente de nuevo por favor");
        },
        error: problemas
    });
    return true;
}

function inicioEnvio() {

}

function problemas() {
    $("#resultados").text('<b>Problemas en el servidor. Intente nuevamente<b>');
    document.getElementById('pedidoform').style.display = 'none';
}
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="js/bootstrap.min.js" crossorigin="anonymous">
</script>