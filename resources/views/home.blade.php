@extends('layout.layout')

@section('content')
<div class="container w-50">
    <table class="table table-striped-columns">
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
              <td>
                <a href="{{route('detailroute', $lead)}}">
                    <button class="btn btn-success">Visualizar</button>\
                </a>
                <button class="btn btn-primary">Editar</button>
                <button class="btn btn-danger">Apagar</button>
            </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
