@extends('layouts.admin')
@section('title','Administrador')
@section ('content')
    <div id="main">
      <button class="openbtn" onclick="openNav()">☰</button>
      <h1 class="text-center">
          Usuarios
      </h1>
      <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Direccion</th>
                <th>Codigo postal</th>
                <th>Email</th>
                <th>Numero de celular</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
          
        </tbody>
    </table>
  </div>
@endsection

