var comunidad = '',
    provincia = '',
    localidad = '',
    URLS = '../php/controlador/distancia.Controller.php',
    marca = $('#marcador'),
    tipoCamion = 'Trailer',
    valorcamion = 1.60



// selecion de camion
$('.camiones').on('click', function() {
    valor = $(this).children('img').attr('src')
    if(valor == 'img/c1.png') {
        marca.css('left', 0)
        tipoCamion = 'Trailer'
        valorcamion = 1.60
    } else if(valor == 'img/c2.png') {
        marca.css('left', 25+'%')
        tipoCamion = 'Camion Normal'
        valorcamion = 1.44
    } else if(valor == 'img/c3.png') {
        marca.css('left', 50+'%')
        tipoCamion = 'Furgon'
        valorcamion = 1,36
    } else if(valor == 'img/c5.png') {
        marca.css('left', 75+'%')
        tipoCamion = 'Vehiculo 3500 k.'
        valorcamion = 1.28
    }
    console.log(tipoCamion+' precio: '+valorcamion);
})

function llenarProvincias() {
    $.ajax({
        url: URLS,
        type: 'post',
        dataType: 'JSON',
        data: {
            accion: 'CONSULTAR',
        }
    }).done(response => {
        var fila = ''
        fila += '<option selected>Selecciona una Comunidad</option>'
        $.each(response, (index, data) => {
            fila += '<option value="'+data.Comunidad+'">'
            fila += data.Comunidad
            fila += '</option>'
        })
        $('#comunidadSalida').html(fila)
        $('#comunidadLlegada').html(fila)
    }).fail(err => {
        console.log('Error al llenar provincias: ' +err.message+' '+err )
    })
}

llenarProvincias()

$('#comunidadSalida').on('change', function() {
    var dato = $(this).val()
    console.log(dato);
    $.ajax({
        url: URLS,
        type: 'post',
        dataType: 'JSON',
        data: {
            accion: 'CONSULTAR_PRO',
            datos: dato
        }
    }).done(response => {
        var fila = ''
        fila += '<option selected>Selecciona una Provincia</option>'
        $.each(response, (index, data) => {
            fila += '<option value="'+data.Provincia+'">'
            fila += data.Provincia
            fila += '</option>'
        })
        $('#provinciaSalida').html(fila)
    }).fail(err => {
        console.log('Error al llenar provincias: ' +err.message+' '+err )
    })
})


$('#provinciaSalida').on('change', function() {
    var dato = $(this).val()
    console.log(dato);
    $.ajax({
        url: URLS,
        type: 'post',
        dataType: 'JSON',
        data: {
            accion: 'CONSULTAR_MUN',
            datos: dato
        }
    }).done(response => {
        var fila = ''
        fila += '<option selected>Selecciona un municipio</option>'
        $.each(response, (index, data) => {
            fila += '<option value="'+data.Municipio+'">'
            fila += data.Municipio
            fila += '</option>'
        })
        $('#municipioSalida').html(fila)
    }).fail(err => {
        console.log('Error al llenar provincias: ' +err.message+' '+err )
    })
})

$('#municipioSalida').on('change', function() {
    var dato = $(this).val()
    console.log(dato);
    $.ajax({
        url: URLS,
        type: 'post',
        dataType: 'JSON',
        data: {
            accion: 'CONSULTAR_DATOS',
            datos: dato
        }
    }).done(response => {
        $('#latSalida').val(response.Latitud)
        $('#longSalida').val(response.Longitud)
    }).fail(err => {
        console.log('Error al llenar provincias: ' +err.message+' '+err )
    })
})


$('#comunidadLlegada').on('change', function() {
    var dato = $(this).val()
    console.log(dato);
    $.ajax({
        url: URLS,
        type: 'post',
        dataType: 'JSON',
        data: {
            accion: 'CONSULTAR_PRO',
            datos: dato
        }
    }).done(response => {
        var fila = ''
        fila += '<option selected>Selecciona una Provincia</option>'
        $.each(response, (index, data) => {
            fila += '<option value="'+data.Provincia+'">'
            fila += data.Provincia
            fila += '</option>'
        })
        $('#provinciaLlegada').html(fila)
    }).fail(err => {
        console.log('Error al llenar provincias: ' +err.message+' '+err )
    })
})


$('#provinciaLlegada').on('change', function() {
    var dato = $(this).val()
    console.log(dato);
    $.ajax({
        url: URLS,
        type: 'post',
        dataType: 'JSON',
        data: {
            accion: 'CONSULTAR_MUN',
            datos: dato
        }
    }).done(response => {
        var fila = ''
        fila += '<option selected>Selecciona un municipio</option>'
        $.each(response, (index, data) => {
            fila += '<option value="'+data.Municipio+'">'
            fila += data.Municipio
            fila += '</option>'
        })
        $('#municipioLlegada').html(fila)
    }).fail(err => {
        console.log('Error al llenar provincias: ' +err.message+' '+err )
    })
})

$('#municipioLlegada').on('change', function() {
    var dato = $(this).val()
    console.log(dato);
    $.ajax({
        url: URLS,
        type: 'post',
        dataType: 'JSON',
        data: {
            accion: 'CONSULTAR_DATOS',
            datos: dato
        }
    }).done(response => {
        $('#latLlegada').val(response.Latitud)
        $('#longLlegada').val(response.Longitud)
    }).fail(err => {
        console.log('Error al llenar provincias: ' +err.message+' '+err );
    })
})

// mandar btn presupuesto
$('#btn-presupuesto').on('click', function() {
    var lsalida = $('#latSalida').val(),
        longsalida = $('#longSalida').val(),
        lllegada = $('#latLlegada').val(),
        longllegada = $('#longLlegada').val()
    $.ajax({
        url: '../php/distancia/distancia.php',
        type: 'post',
        dataType: 'JSON',
        data: {
            la_sal: lsalida,
            lo_sal: longsalida,
            la_lle: lllegada,
            lo_lle: longllegada
        }
    }).done(response => {
        var sal = $('#municipioSalida').val(),
            lle = $('#municipioLlegada').val(),
            ciudad1 = $('#provinciaSalida').val(),
            ciudad2 = $('#provinciaLlegada').val(),
            kilometro = Math.floor(response)

        $('#tipo-destino').text('desde: '+sal+'('+ciudad1+') - hasta: '+lle+'('+ciudad2+') = '+ kilometro+ ' Kms.')
        var precio = Math.floor((kilometro * valorcamion) + kilometro)
        $('#tipo-camion').text('Vehículo: '+ tipoCamion +'; precio kilometraje: '+precio+' €.' )
        var iva = (16 * precio) / 100
        var total = iva + precio
        $('#tipo-iva').text('El 16% de iva: '+ iva)
        $('#tipo-total').text('Total es de: ' +total.toFixed(2)+' €. Aproximadamente.')

    }).fail(err => {
        console.log('Error al calcular coordenadas: ' +err.message+' '+err );
    })
})