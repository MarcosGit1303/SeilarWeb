@extends('layout')
@section('titulo', 'inicio')
@section('importaciones')
@endsection
@section('contenido')
    <div class="container">
        <h2>Login</h2>
        <form>
            <label for="loginName">Nombre:</label>
            <input type="text" id="loginName" name="loginName" placeholder="Ingrese su nombre">
            <input type="submit" value="Iniciar sesión">
        </form>
    </div>

    <div class="container" style="margin-top: 20px;">
        <h2>Registro</h2>
        <form>
            <label for="registerName">Nombre:</label>
            <input type="text" id="registerName" name="registerName" placeholder="Ingrese su nombre">
            <input type="submit" value="Registrarse">
        </form>
    </div>
@endsection
