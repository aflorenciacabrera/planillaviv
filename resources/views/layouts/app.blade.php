<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> ECV</title>
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/planilla/ver/1') }}">
                    <label for="">ECV:</label> <font face="Britannic Bold" size="4"><i><span>Encuesta de Calidad de Vida  </i> </span></font>  {{-- {{ config('app.name', 'Laravel') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                            </li> --}}
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif --}}
                        @else
                            {{-- <li class="nav-item">
                                <a   href="{{url('/planilla')}}" class="nav-link"  role ="button" >
                                <i class="fa fa-home"></i> Planilla </a>
                            </li>
                            <li class="nav-item">
                                <a   href="{{url('/planilla/datos')}}" class="nav-link"  role ="button" >
                                <i class="fa fa-home"></i> Datos </a>
                            </li>
                            <li class="nav-item">
                                <a   href="{{url('/planilla/viviendas')}}" class="nav-link"  role ="button" >
                                <i class="fa fa-home"></i> Viviendas </a>
                            </li> --}}
                            @if(Auth::user()->hasRole('admin'))

                            @elseif(Auth::user()->hasRole('encargado'))
                             <li class="nav-item ">  <label for="name" class="nav-link">{{ Auth::user()->name }}</label>  </li>
                            <li class="nav-item border ">  
                                <a   href="{{url('/')}}" class="nav-link "  role ="button" >
                                <i class="fa fa-home"></i> Inicio </a> 
                            </li>
                            <li class="nav-item border">  
                                <a   href="{{url('planilla/verificar')}}" class="nav-link"  role ="button" >
                                Verificar Planillas </a> 
                            </li>
                             <li class="nav-item border">  
                                <a   href="{{url('planilla/datos')}}" class="nav-link"  role ="button" >
                               Nueva Planillas </a> 
                            </li>
                            {{-- <li class="nav-item border">  
                                <a   href="{{url('/encargado/ingresador/lista')}}" class="nav-link"  role ="button" >
                                 Ingresadores </a> 
                            </li> --}}
                           
                            <li class="nav-item border"> <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i> {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                              {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/planilla/datos') }}">
                                     Nueva Planillas
                                </a>
                                    <a class="dropdown-item" href="{{ url('/planilla/verificar') }}">
                                     Verificar Planillas
                                    </a>
                                  
                                    <hr>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}
                            @elseif(Auth::user()->hasRole('ingresador'))
                            <li class="nav-item ">  <label for="name" class="nav-link">{{ Auth::user()->name }}</label>  </li>
                            <li class="nav-item border ">  
                                <a   href="{{url('/')}}" class="nav-link "  role ="button" >
                                <i class="fa fa-home"></i> Inicio </a> 
                            </li>
                            <li class="nav-item border">  
                                <a   href="{{url('planilla/verificar')}}" class="nav-link"  role ="button" >
                                Verificar Planillas </a> 
                            </li>
                             <li class="nav-item border">  
                                <a   href="{{url('planilla/datos')}}" class="nav-link"  role ="button" >
                               Nueva Planillas </a> 
                            </li>
                            
                           
                            <li class="nav-item border"> <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i> {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                            {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="{{ url('/planilla/datos') }}">
                                     Nueva Planillas
                                </a>
                                    <a class="dropdown-item" href="{{ url('/planilla/verificar') }}">
                                     Verificar Planillas
                                </a>
                               
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
