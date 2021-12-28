<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Transportes Curro</title>
  <!-- CSS -->
  <link rel="stylesheet" href="css/dist/main.css">
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  

</head>

<body class="">
  <header>
    <van id="nav-main">
      <ul>
        <li><a href="#" class="item-nav">Inicio</a></li>
        <li><a href="#usuario" class="item-nav">Usuario</a></li>
        <li><a href="#sep-info" class="item-nav">Servicios</a></li>
      </ul>
      <img src="img/logo.png" alt="" class="logo">
      <ul>
        <li><a href="#sep-presupuesto" class="item-nav">Presupuesto</a></li>
        <li><a href="#sep-conocenos" class="item-nav">Conocenos</a></li>
        <li><a href="#sep-contacto" class="item-nav">Contacto</a></li>
      </ul>
    </van>
  </header>
  <!-- banner -->
  <section id="banner">
    <div class="container conte-banner">
      <h1 class="text-banner">La empresa de transporte pensada para ti, creada para ti y tu nos haces viajar...</h1>
      <div class="btn-banner">
        <a href="https://www.facebook.com/Transporte-Curro-100516628914299" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> facebook</a>
        <a href="#usuario" class="btn btn-primary btn-lg"><i class="fa fa-user"></i> Registrate</a>
      </div>
    </div>
  </section><!-- fin banner -->
  <!-- modal -->

  <div style="z-index: 10000000000;" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">USUARIO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- login -->
        <div class="modal-body">
          <div class="login" id="login">
            <form action="">
              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Usuario</span>
                </div>
                <input type="text" class="form-control" id="usuarioLog" name="usuarioLog" placeholder="ejemplo@dire.com"
                  aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Contraseña</span>
                </div>
                <input type="text" class="form-control" id="passLog" name="passLog" placeholder="Username"
                  aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <p>No tienes una cuenta <span style="cursor:pointer;"  id="pareg" class="text-primary"> Registrate</span></p>
              <div class="row mt-3">
                <div class="col-md-6">
                  <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Salir</button>
                </div>
                <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-block">Entrar</button>
                </div>
              </div>
            </form>
          </div> <!-- fin login -->

          <!-- registro -->
          <div class="registro" id="registro">
            <form action="">
              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">nombre</span>
                </div>
                <input type="text" class="form-control" id="nombreReg" name="nombreReg" placeholder="nombre de pila"
                  aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">1 apellido</span>
                </div>
                <input type="text" class="form-control" id="primeroReg" name="primeroReg" placeholder="primer apellido"
                  aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">2 apellido</span>
                </div>
                <input type="text" class="form-control" id="segundoReg" name="segundoReg" placeholder="segundo apellido"
                  aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">via</span>
                </div>
                <select class="custom-select" id="viaReg" name="viaReg">
                  <option selected>Seleciona un via</option>
                  <option value="calle">Calle</option>
                  <option value="avenida">Avenida</option>
                  <option value="plaza">Plaza</option>
                  <option value="camino">Camino</option>
                  <option value="paseo">Paseo</option>
                  <option value="carretera">Carretera</option>
                </select>
              </div>

              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">domicilio</span>
                </div>
                <input type="text" class="form-control" id="domicilioReg" name="domicilioReg" placeholder="direccion"
                  aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">C. Postal</span>
                </div>
                <input type="text" class="form-control" id="codigoReg" name="codigoReg" placeholder="codigo postal"
                  aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Localidad</span>
                </div>
                <select class="custom-select" id="localidadReg" name="localidadReg">
                  <option selected>Seleciona un Municipio</option>
                </select>
              </div>

              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Provincia</span>
                </div>
                <select class="custom-select" id="provinciaReg" name="provinciaReg">
                  <option selected>Seleciona un provincia</option>
                </select>
              </div>

              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Pais</span>
                </div>
                <input type="text" class="form-control" id="paisReg" name="paisReg" placeholder="provincia"
                  aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <p>Ya tengo una cuenta <span style="cursor:pointer;" id="palogin" class="text-primary"> Entrar</span></p>
              <div class="row mt-3">
                <div class="col-md-6">
                  <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Salir</button>
                </div>
                <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-block">Registrtate</button>
                </div>
              </div>
              
              
            </form>
          </div>
          
        <!-- <p>Ya tienes una cuenta <span id="reg" class="text-primary"> Entrar</span></p> -->
        <!-- </div>
        <div class="modal-footer"> -->
          
        </div>
        <br>
      </div>
    </div>
  </div> <!-- fin modal -->

  <!-- usuario -->
  <section id="usuario">
    <div class="container">
      <h1 class="text-center text-white m-5">Pensado para ti...</h1>
      <h5 class="text-white mt-5">Registrate, para facilitarte nuestros servicios, y si ya estas registrado, entra para disfrutar del contenido</h5>
      <button class="btn btn-primary" id="btn-reg" data-toggle="modal" data-target="#exampleModalCenter">Registrate o
        inicia sesión</button>
    </div>
  </section> <!-- fin usuario -->

  <!-- separador -->
  <div class="separador" id="sep-info" style="height: 70px;"></div> <!-- fin separador -->

  <!-- info -->
  <section id="info">
    <div class="container">
      <h1 class="titulo-section text-center mb-5">¿COMO FUNCIONAMOS?</h1>
      <div class="row">
        <div class="col-md-6 foto-info">
          <img src="img/ordenador.png" alt="" width="500">
        </div>
        <div class="col-md-6">
          <div class="conte-info-textox">
            <h4>Configura tu envío</h4>
            <p class="parra">Selecciona todas las características de tu envío en menos de un minuto.</p>
            <h4>Contrata el precio inicial o espera ofertas</h4>
            <p class="parra">Puedes contratar tus servicios directamente por el precio que indica la plataforma o si
              puedes esperar un poco más, vas a recibir otras ofertas</p>
            <h4>Realiza el pago y… ¡despreocúpate!</h4>
            <p class="parra">Págalo con el método que prefieras, nuestro camión recogerá tu mercancía ese mismo día o en
              24h para entregar en tiempo récord.</p>
          </div>
        </div>
      </div>
      <h3 class="text-center m-5">Razones por las que nuestros clientes repiten con transportes CURRO</h3>
      <h1><span class="badge badge-warning"><i class="fa fa-euro fa-x3"></i></span> Econimico</h1>
      <div class="card">
        <p class="texto-info-2">En Transportes curro somos expertos en aprovechar los retornos y espacios vacíos de los
          transportistas para proporcionarte los precios más competitivos.</p>
      </div>
      <h1><span class="badge badge-warning"><i class="fa fa-handshake-o fa-x3"></i></span> Experiencia</h1>
      <div class="card">
        <p class="texto-info-2">Te proporcionamos una amplia red de transportistas para que puedas enviar mercancía a la
          vez que optimizamos el traslado de mercancías.</p>
      </div>
      <h1><span class="badge badge-warning"><i class="fa fa-clock-o fa-x3"></i></span> instatáneo</h1>
      <div class="card">
        <p class="texto-info-2">Publica tu carga en menos de un minuto y recibe respuesta de forma instantánea. Tendrás
          disponibles tus envíos en cualquier momento..</p>
      </div>
      <h1><span class="badge badge-warning"><i class="fa fa-globe fa-x3"></i></span> Seguimiento</h1>
      <div class="card">
        <p class="texto-info-2">Podrás ver la ubicación de tu carga en tiempo real para gestionar de forma más eficiente
          tu tiempo.</p>
      </div>
    </div>
  </section> <!-- fin info -->

  <!-- separador -->
  <div class="separador" id="sep-presupuesto" style="height: 70px;"></div> <!-- fin separador -->

  <Section id="presupuesto">
    <div class="container">
      <h1 class="titulo-section text-center text-white mb-5">HAZ TU PRESUPUESTO</h1>
      <p class="text-center text-white mb-5">Aqui podras simular un presupuesto aproximado de trnasporte que quieres realizar. La mano de obra ya esta incluido</p>
      <div class="row" style="position: relative;">
        <div class="col-md-3" id="marcador" style="position: absolute; top:0;left:0; width:100%; height: 100%; background-color: rgb(136, 198, 248);border-radius: 20px; transition: all 1s;"></div>
        <div class="col-md-3 text-center camiones"><img class="mt-3" src="img/c1.png" alt=""><h5 class="text-white">Trailer</h5></div>
        <div class="col-md-3 text-center camiones"><img class="mt-3" src="img/c2.png" alt=""><h5 class="text-white">Camion normal</h5></div>
        <div class="col-md-3 text-center camiones"><img class="mt-3" src="img/c3.png" alt=""><h5 class="text-white">furgon</h5></div>
        <!-- <div class="col-md-3"><img src="img/c4.png" alt=""></div> -->
        <div class="col-md-3 text-center camiones"><img class="mt-3" src="img/c5.png" alt=""><h5 class="text-white">Vehiculo 3500 k.</h5></div>
      </div>
      <br>
      <form action="">
        <div class="row">
          <div class="col-md-6">

            <div class="form-group">
              <label for="exampleFormControlInput1" class="text-white">Salida del porte</label>
              <select class="custom-select" id="comunidadSalida" name="comunidadSalida">
                <option selected>Seleciona una comunidad</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1" class="text-white">Desde donde parte el porte</label>
              <select class="custom-select" id="provinciaSalida" name="provinciaSalida">
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1" class="text-white">Localidad</label>
              <select class="custom-select" id="municipioSalida" name="municipioSalida">
              </select>
            </div>
          

          <div class="form-group">
            <input type="hidden" id="latSalida" name="latSalida">
            <input type="hidden" id="longSalida" name="longSalida">
          </div>
      </div>
          <div class="col-md-6">

            <div class="form-group">
              <label for="exampleFormControlInput1" class="text-white">Llegada del porte</label>
              <select class="custom-select" id="comunidadLlegada" name="comunidadLlegada">
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1" class="text-white">Destino del porte</label>
              <select class="custom-select" id="provinciaLlegada" name="provinciaLlegada">
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1" class="text-white">Localidad</label>
              <select class="custom-select" id="municipioLlegada" name="municipioLlegada">
              </select>
            </div>

            <div class="form-group">
              <input type="hidden" id="latLlegada" name="latLlegada">
              <input type="hidden" id="longLlegada" name="longLlegada">
            </div>
          </div>

          <div class="form-group col-md-12">
            <h3 id="tipo-destino" class="text-center text-warning m-3 texto-presupuesto"></h3>
            <h3 id="tipo-camion" class="text-center text-warning m-3 texto-presupuesto"></h3>
            <h3 id="tipo-iva" class="text-center text-warning m-3 texto-presupuesto"></h3>
            <h2 id="tipo-total" class="text-center text-white m-3 texto-presupuesto"></h2>
          </div>

          <div class="col-md-12 btn-suma text-center mt-5 mb-5">
            <div class="btn-group">
            <button type="button" class="btn btn-success btn-lg" id="btn-presupuesto">Crear Presupuesto</button>
            <button class="btn btn-danger btn-lg" type="reset" id="limpiar">Nuevo</button>
            </div>
          </div>
        </div>
      </form>

      
    </div>
  </Section>

    <!-- separador -->
    <div class="separador" id="sep-conocenos" style="height: 70px;"></div> <!-- fin separador -->

  <section id="conocenos" pt-5 pb-5>
    <h1 class="text-center mb-5">¿QUIENES SOMOS?</h1>
    <div class="col-md-8 offset-2">
      <p>Las <b>empresa de transporte Curro</b> están compuestas por una flota de diferentes tipos de vehículos que se adaptan a las necesidades del abanico de consumidores aportando la posibilidad de transportar cualquier clase de mercancía por España o el país de Europa que desees. Una empresa de envíos puede formarse desde teniendo un solo vehículo para todos los servicios o envíos hasta con una flota de miles de vehículos.</p>
      <p>En consecuencia de la tendencia de un mercado global, las pequeñas, medianas y grandes compañías cada vez tienen un mayor volumen de ventas y compras por todo el mundo lo que ha afectado directamente a las empresas de transporte. De este modo, cada compañía de esta industria ha tenido que acomodarse a llevar a cabo trayectos muchos más largos diariamente para dar respuesta a las necesidades de los consumidores. También han incluido en sus trayectos un doble conductor para hacerlos de forma más rápida evitando los descansos que marca la ley por cada conductor pudiendo de esta forma reducir el tiempo de cada servicio sin renunciar a una entrega siempre eficaz de la mercancía.</p>
    </div>
  </section>

  <!-- separador -->
  <div class="separador" id="sep-contacto" style="height: 70px;"></div> <!-- fin separador -->

  <section id="contacto" class="bg-dark pt-5 pb-5">
   <div class="container">
    <h1 class="text-center text-white mb-5">CONTACTO</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="texto">
          <h3 class="text-white"><i class="fa fa-map-marker"></i> Plaza de la Lealtad, s/n</h3>
          <h3 class="text-white"><i class="fa fa-map"></i> 28051 - Madrid</h3>
          <h3 class="text-white"><i class="fa fa-"></i>Madrid - España</h3>
          <h3 class="text-white"><i class="fa fa-phone"></i> 913 245 678</h3>
          <h3 class="text-white"><i class="fa fa-envelope"></i> transportecurro@gmail.com</h3>
          <h3 class="text-white">O visitanos en <a href="https://www.facebook.com/Transporte-Curro-100516628914299" target="_blank" class="btn btn-primary rounded-circle"><i class="fa fa-facebook"></i></a></h3>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card p-5">
          <form action="">
            <div class="form-group"><input type="text" class="form-control" name="" id="" placeholder="nombre"></div>
            <div class="form-group"><input type="text" class="form-control" name="" id="" placeholder="tu correo"></div>
            <div class="form-group"><input type="text" class="form-control" name="" id="" placeholder="asunto"></div>
            <div class="form-group"><textarea name="" id="" class="form-control" placeholder="tu mensaje"></textarea></div>
            <br>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
          </form>
        </div>
      </div>
    </div>
   </div>
  </section>

  <footer>
    <h6 class="text-center m-5 pb-5">Tranporte CURRO • 2021</h6>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="js/main.js"></script>
  <script src="js/distancia.ajax.js"></script>
</body>

</html>