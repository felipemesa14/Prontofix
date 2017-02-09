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
            <div class="login-title"><strong>Bienvenido</strong>, Por Favor Ingresa los datos</div>
            <form action="{{URL::to('Authentication')}}" class="form-horizontal" method="post">
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="email" name="email" type="email" class="form-control"
                               placeholder="Correo Electronico"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="password" name="password" type="password" class="form-control"
                               placeholder="Contrase&ntilde;a"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <a href="{{URL::to('ShowRegisterUsers')}}">
                            <button type="button" class="btn btn-info">Registrar</button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-success">Ingresar</button>
                    </div>
                </div>
            </form>
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






