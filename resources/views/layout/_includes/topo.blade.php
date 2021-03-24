<!DOCTYPE html>
<html>
<head>
    <title> @yield('titulo') </title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<header>
    <nav>
        <div class="nav-wrapper ">
            <div class="container">
                <a href="#!" class="brand-logo">Logo</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    @if(Auth::guest())
                        <li><a href="{{route('site.login')}}">Login</a></li>
                    @else
                        <li><a href="{{route('pedido.index')}}">Pedidos</a></li>
                        <li><a href="{{route('user.index')}}">Funcionarios</a></li>
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile">
        @if(Auth::guest())
            <li><a href="{{route('site.login')}}">Login</a></li>
        @else
            <li><a href="{{route('pedido.index')}}">Pedidos</a></li>
            <li><a href="{{route('user.index')}}">Funcionarios</a></li>
            <li><a href="#">{{Auth::user()->name}}</a></li>
            <li><a href="{{route('site.login.sair')}}">Sair</a></li>
        @endif
    </ul>
</header>

