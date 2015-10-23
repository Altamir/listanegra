<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset="UTF-8">
    <title>Lista Negra - Hostel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.indigo-deep_purple.min.css" />
    <script	src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
    <link rel="stylesheet" 	href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @yield('head')
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <a  class="mdl-layout-title mdl-navigation__link" href="{{ route('raiz') }}">Lista Negra</a>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <a class="mdl-navigation__link" href="">{{$user->name or ''}}</a>
                <a class="mdl-navigation__link" href="{{ route('logout') }}">Sair</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Opções</span>
        <nav class="mdl-navigation">
            <span>Hostels</span>
            <a class="mdl-navigation__link" href="{{ route('hostels.index') }}">Listar Hostels</a>
            <a class="mdl-navigation__link" href="{{ route('hostels.create') }}">Cadastra Hostel</a>
            <span>Hospedes</span>
            <a class="mdl-navigation__link" href="">Pesquisa Hospede</a>
            <a class="mdl-navigation__link" href="">Cadastra Hospede</a>
            <a class="mdl-navigation__link" href="{{route('logout')}}">Sair</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content">
            @yield('content')
        </div>
    </main>
</div>
@yield('script')
</body>
</html>