@extends('layout.layout')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">CPF</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($leads as $key=>$lead)
        <tr>
          <th scope="row">{{++$key}}</th>
          <td>{{$lead->nome}}</td>
          <td>{{$lead->email}}</td>
          <td>{{$lead->cpf}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
