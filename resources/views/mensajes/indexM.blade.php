@extends('layouts.admin')
@section('title','AdminMensajes')
@section ('content')
    <div id="main">
        <button class="openbtn" onclick="openNav()">☰</button>
        <h1 class="text-center">Mensajes</h1>
        @if($mensajes->isEmpty())
            <div>No hay mensajes</div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Asunto</th>
                        <th>Mensaje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mensajes as $mensaje)
                        <tr>
                            <td>{!! $mensaje->nameContact !!}</td>
                            <td>{!! $mensaje->emailContact !!}</td>
                            <td>{!! $mensaje->subject !!}</td>
                            <td>{!! $mensaje->message !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
