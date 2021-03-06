<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iniciar Sesión</title>

    <!-- Bootstrap -->
    <link href="{{url('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{url('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login"> 
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{url('entrar')}}" method="POST">
              <h1>Iniciar Sesión</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" name="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required="" name="password" />
              </div>
              <div>
                <!-- <a class="btn btn-default submit" href="{{url('login')}}">Iniciar Sesion</a> -->
                <input type="submit" class="btn btn-default" value="Entrar">
                <a class="reset_pass" >Olvido Su Contraseña? </a>
              </div>

              <div class="clearfix"></div>
                    
              <div class="separator">
                <p class="change_link">Nuevo en el sitio?
                  <a href="#signup" class="to_register"> Crear Cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1> PruebaCarlos</h1>
                  <p>©2017 Todos los derechos reservados</p>
                </div>
              </div>
            </form>
            @if(Session::has('message'))
                      <div id="alert">
                        <div class="col-sm-12 hr hr-18 hr-double dotted"></div>
                        <div class="col-sm-4 col-xs-12 col-sm-offset-4 alert alert-{{Session::get('class')}}">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {{Session::get('message')}}
                          <br>
                        </div>
                      </div>
                    @endif
          </section>
        </div>


        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="POST" action="{{url('guardarUserNew')}}">
              <h1>Crear Cuenta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" />
              </div>
              <div>
                <a class="btn btn-default submit" href="princial">Crear Cuenta</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Tienes una cuenta de usuario?
                  <a href="#signin" class="to_register"> Iniciar Sesión </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1> PruebaCarlos!</h1>
                  <p>©2017 Todos los derechos reservados. Juan Carlos Escobar</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
      <script>
    // Tiempo del mensaje
      $('#alert').fadeOut(6000, function() {
        $(this).remove();
      });
  </script>
  </body>
</html>
