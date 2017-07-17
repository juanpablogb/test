@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>nombre completo</th>
        <th>Ocupación/th>
      </tr>
    </thead>
    <tbody>
      @foreach($asistencias as $fila)
      <tr>
        <td>{{$fila['id']}}</td>
        <td>{{$fila['nombre']}} {{$fila['apellido']}}</td>
        <td>{{$fila['ocupacion']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection