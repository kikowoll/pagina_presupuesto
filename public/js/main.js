var altura,
    tope = false

$(window).on('scroll', function() {
    altura = $(this).scrollTop()
    console.log(altura);
    if(altura > 80) {
        if(!tope) {
            tope = true
            $('.logo').css({
                margin: '-18px 20px 0 20px',
                width: 100+'px',
                height: 70+'px'
            })
            $('header').css('background-color', '#333333')
            $('.item-nav').css({
                color: 'white',
                textShadow: 'none'
            })
        }
    } else {
        if(tope) {
            tope = false
            $('.logo').css({
                margin: '120px 20px 0 20px',
                width: 250+'px',
                height: 178+'px'
            })
            $('header').css('background-color', 'transparent')
            $('.item-nav').css({
                color: '#333333'
            })
        }
    }
})

// solapas tablas
var pos = false
$('.solapas').on('click', function() {
    $('.solapas').css('opacity', .5)
    $(this).css('opacity', 1)
    if(!pos) {
        $('.conte-datos-tablas').css('left',-100+'%')
        pos = true
    } else {
        $('.conte-datos-tablas').css('left', 0)
        pos = false
    }
})

// botones registro
$('#palogin').on('click', function() {
    $('#registro').css('display','none')
    $('#login').css('display','block')
})

$('#pareg').on('click', function() {
    $('#login').css('display','none')
    $('#registro').css('display','block')
})

// boton limpiar presupuesto
$('#limpiar').on('click', function() {
    $('.texto-presupuesto').text('')
    $('#marcador').css('left', 0)
})