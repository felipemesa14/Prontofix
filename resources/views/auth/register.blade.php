<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
    <!-- META SECTION -->
    <title>Prontofix S.A</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" type="image/x-icon"/>
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    {{Html::Style('Template/css/theme-blue.css')}}
            <!-- EOF CSS INCLUDE -->
</head>
<body>

<div class="login-container">

    <div class="login-box animated fadeInDown">
        {{--<div class="login-logo"></div>--}}
        <div class="login-body">
            <div class="login-title"><strong>Bienvenido</strong>,<br> Por Favor Ingresa los datos para registrarte en el
                sistema.
            </div>

            {{Form::open(['action'=> 'Auth\RegisterController@register', 'method'=>'post','class'=>'form-horizontal'])}}
            <div class="form-group">
                <div class="col-md-12">
                    {{Form::token()}}
                    {{Form::text('name', '', ['class' => 'form-control','placeholder'=>'Nombre de Usuario'])}}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    {{Form::email('email', '', ['class' => 'form-control','placeholder'=>'Correo Electronico'])}}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    {{Form::password('password', ['class' => 'form-control','placeholder'=>'Password'])}}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    {{Form::submit('Registrarse',['class'=>'btn btn-info btn-block'])}}
                    {{--<button class="btn btn-info btn-block">Registrar</button>--}}
                </div>
            </div>
            {{Form::close()}}
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2017 Prontofix
            </div>
        </div>
    </div>

</div>

</body>
</html>






