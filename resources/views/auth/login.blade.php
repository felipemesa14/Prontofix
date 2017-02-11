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
    {!!Html::Style('Template/css/theme-blue.css')!!}
            <!-- EOF CSS INCLUDE -->
</head>
<body>

<div class="login-container">

    <div class="login-box animated fadeInDown">
        {{--<div class="login-logo"></div>--}}
        <div class="login-body">
            <div class="login-title"><strong>Bienvenido</strong>, Login de usuario</div>
            {{Form::open(['route'=> 'Auth', 'method'=>'post','class'=>'form-horizontal'])}}
            <div class="form-group">
                <div class="col-md-12">
                    {{Form::text('email',null,['class'=>'form-control','placeholder'=>'ingrese su E-mail'])}}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    {{Form::password('password',['class'=>'form-control','placeholder'=>'ingrese su password'])}}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6 col-sm-6 col-md-6">
                    {{--<a href="{{route('show.user.register')}}">--}}
                        {{--{{Form::button('Registrar',['class'=>'btn btn-info btn-block'])}}--}}
                    {{--</a>--}}
                </div>
                <div class="col-md-6">
                    {{Form::submit('Ingresar',['class'=>'btn btn-success btn-block'])}}
                </div>
            </div>
            {{Form::Close()}}
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






