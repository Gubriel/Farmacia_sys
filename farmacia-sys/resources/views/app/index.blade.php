@extends('app.layout.template')

@guest
@section('links')
<ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link nav-txt-color" href="#">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-txt-color" href="#">Cadastrar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-txt-color" href="#">Contato</a>
    </li>
</ul>
@endsection
@else
@section('links')
<ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link nav-txt-color" href="#">Conta</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-txt-color" href="#">Logout</a>
    </li>
</ul>
@endsection
@endguest

@section('title', 'Farmacx')

@section('content')
@endsection
