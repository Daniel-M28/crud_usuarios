<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<!-- Enlazar al archivo CSS de Bootstrap (CDN) -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<!-- Enlazar al archivo JavaScript de Bootstrap (CDN) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sofarmatic') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- <link rel="stylesheet" href="./estilos.css" />
    <link rel="stylesheet" href="../estilos.css" /> */ -->
    
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">

</head>
<body>

    <div id="app">
    <header>
        <img src="logo-farmacia.png" class="header1 img1">
           <div class="titulo"> <h1 class="header1" > FARMACIA ZEUS </h1> </div>
           <div class = "wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #08f;"></path></svg></div>
                  
    </header>

        
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm" style="margin-top:60px;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/inicio') }}">
                    {{ config('Sofarmatic', 'Sofarmatic') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" >
                     <li class="nav-item" style="display:flex">
                     
                     <a class="nav-link " href="{{ route('persona.index') }}">{{ __('personas') }}</a>
                     
                     <a class="nav-link " href="{{ route('citas.index') }}">{{ __('citas') }}</a>
                     

                     <a class="nav-link " href="{{ route('inventario.index') }}">{{ __('inventario') }}</a>

                     <a class="nav-link " href="{{ route('inventario.index') }}">{{ __('tienda') }}</a>
                     </li>



                    </ul>

                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                    
                        <!-- Authentication Links -->

                  
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



       <!--Sidebar -->
<div class="barra-lateral">
       <ul>
        <li>Tienda</li>
        <li>Ceritificados medicos</li>
        <li>Preguntas frecuentes</li>
        <li>PQRS</li>

</div>

       </ul>


        <main class="py-4">
        @yield('content')
        </main>

       

    </div>




  </div>


  
                    </div>
                </div>
            </nav>
        </div>

      
</body>
 


</html>
