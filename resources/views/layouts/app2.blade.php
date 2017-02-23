<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Prontofix') }}</title>
    @include('css.css')
</head>
<body>
<div class="page-container">
    <!-- Left Menu-->
    <div class="page-sidebar">
        <ul class="x-navigation">
            <li class="xn-logo">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-profile">
                <a href="#" class="profile-mini">
                    <img src="{{url('Template/assets/images/users/avatar.jpg')}}" alt="{{ Auth::user()->name }}"/>
                </a>
                <div class="profile">
                    <div class="profile-image">
                        <img src="{{url('Template/assets/images/users/avatar.jpg')}}" alt="{{ Auth::user()->name }}"/>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name">{{ Auth::user()->name }}</div>
                        <div class="profile-data-title">Administrador</div>
                    </div>
                </div>
            </li>
            <li class="xn-title">Navegador</li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Clientes</span></a>
                <ul>
                    <li><a href="#"><span class="fa fa-image"></span>Hola </a></li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
                        <ul>
                            <li><a href="#"><span class="fa fa-align-center"></span> Default</a></li>
                            <li><a href="#"><span class="fa fa-align-justify"></span> Full Width</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Mantenimientos</span></a>
                <ul>
                    <li><a href="#">Preventivos</a></li>
                    <li><a href="#">Correctivos</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Top Menu-->
    <div class="page-content">
        <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
            <li class="xn-icon-button">
                <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
            </li>
            <li class="xn-icon-button pull-right">
                <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
            </li>
        </ul>
        @yield('content')
    </div>
</div>
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Cerrar <strong>Sessión</strong> ?</div>
            <div class="mb-content">
                <p>Estas seguro que quieres cerrar la sessión?</p>
                <p>Presiona No, si deseas seguir trabajando, presiona Si, si deseas cambiar de usuario</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="{{ route('logout') }}" class="btn btn-success btn-lg" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Si</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<audio id="audio-alert" src="{{ url('Template/audio/alert.mp3') }}" preload="auto"></audio>
<audio id="audio-fail" src="{{url('Template/audio/fail.mp3')}}" preload="auto"></audio>
@include('js.js')
</body>
</html>
