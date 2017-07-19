<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iniciar Sesion</title>

    <!-- Bootstrap -->
    <link href="../../laravel-4.2.11/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../laravel-4.2.11/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../laravel-4.2.11/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../../laravel-4.2.11/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../laravel-4.2.11/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login"> 
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{url('entrar')}}" method="POST">
              <h1>Iniciar Sesion</h1>
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
                  <p>©2017 Todos los derechos resrvados</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form >
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="princial">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
