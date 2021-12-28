var URLS = '../php/controlador/cliente.Controller.php'

// mostar todos los datos
function consultar() {
    $.ajax( {
        url: URLS,
        type: 'post',
        dataaType: 'JSON',
        data: {
            accion : 'CONSULTAR'
        }
    }).done(response => {
        console.log(response);
        var fila = ''
        $.each(response, (index,data) => {
            fila += '<tr>'
            fila += '<td>'+ data.id_cliente +'</td>'
            fila += '<td>'+ data.nombre_cliente +' '+ data.primer_apellido +' ' + data.segundo_apellido +'</td>'
            fila += '<td>'+ data.ciudad +'</td>'
            fila += '<td>'
            fila += '<div class="btn-group">'
            fila += '<button class="btn btn-primary btn-sm" onclick="ConsultarPorId('+ data.id_cliente+')">'
            fila += '<i class="fa fa-pencil"></i></button>'
            fila += '<button class="btn btn-danger btn-sm" onclick="borrar('+ data.id_cliente+')">'
            fila += '<i class="fa fa-trash"></i></button>'
            fila += '</td>'
            fila += '</tr>'
        })

        $('#myclientesTB').html(fila)

    }).fail(err => {
        console.log('Error al mostrar: ' +err.message+' '+err )
    })

    llenarProvincias()
}

// mostrar un solo dato
function ConsultarPorId(idd) {
    $.ajax( {
        url: URLS,
        type: 'post',
        dataaType: 'JSON',
        data: {
            accion : 'CONSULTAR_ID',
            id_cliente: idd
        }
    }).done(response => {
        console.log(response);
        $('#idd').val(response.id_cliente)
        $('#nombre').val(response.nombre_cliente)
        $('#primer-ape').val(response.primer_apellido)
        $('#segundo-ape').val(response.segundo_apellido)
        $('#via').val(response.via)
        $('#domicilio').val(response.domicilio)
        $('#codigo').val(response.codigo_postal)
        $('#localidad').val(response.localidad)
        $('#provincia').val(response.ciudad)
        $('#pais').val(response.pais)
    }).fail(err => {
        console.log('Error al mostrar id: ' +err.message+' '+err )
    })
}

// guardar en la base de datos
function Guardar() {
    var idd = $('#idd').val()
    if(idd == "") {
        $.ajax ({
            url:URLS,
            type: 'post',
            dataType: 'JSON',
            data: {
                nombre: $('#nombre').val(),
                primer_ape: $('#primer-ape').val(),
                segundo_ape: $('#segundo-ape').val(),
                via: $('#via').val(),
                domicilio: $('#domicilio').val(),
                codigo: $('#codigo').val(),
                localidad: $('#localidad').val(),
                provincia: $('#provincia').val(),
                pais: $('#pais').val(),
                accion: 'GUARDAR'
            }
        }).done(response => {
            if(response == 'bien') {
                console.log('Guardado con exito');
                vaciarForm()
            } else {
                console.log('Error al guardar');
            }
        }).fail(err => {
            console.log('Error al guardar vale: ' +err.message+' '+err )
        })
    } else {
        $.ajax ({
            url:URLS,
            type: 'post',
            dataType: 'JSON',
            data: {
                id_cliente: $('#idd').val(),
                nombre: $('#nombre').val(),
                primer_ape: $('#primer-ape').val(),
                segundo_ape: $('#segundo-ape').val(),
                via: $('#via').val(),
                domicilio: $('#domicilio').val(),
                codigo: $('#codigo').val(),
                localidad: $('#localidad').val(),
                provincia: $('#provincia').val(),
                pais: $('#pais').val(),
                accion: 'MODIFICAR'
            }
        }).done(response => {
            if(response == 'ok') {
                console.log('Editado con exito');
                vaciarForm()
            } else {
                console.log('Error al editar');
            }
        }).fail(err => {
            console.log('Error al guardar: ' +err.message+' '+err )
        })
    }
    
}

// eliminar dato
function borrar(id_cliente) {
    $.ajax({
        url: URLS,
        type: 'post',
        dataType: 'JSON',
        data: {
            accion: 'ELIMINAR',
            id_cliente: id_cliente
        }
    }).done(response => {
        if(response == 'ok') {

        } else {

        }
    }).fail(err => {
            console.log('Error al eliminar: ' +err.message+' '+err )
        })
}

function vaciarForm() {
    $('').trigger('reset')
}

consultar()

