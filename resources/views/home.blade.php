@extends('layout.layout')

@section('content')

<div class="container w-50">
    <a href="{{ route('createroute')}}">
        <button class="btn btn-success mb-5">Cadastrar</button>
    </a>
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
              <td class="g-3">
                <a href="{{route('detailroute', $lead)}}" class = 'ml-4'>
                    <button class="btn btn-success">Visualizar</button>
                </a>
                <a href="{{route('editroute', $lead)}}" class = 'm-1'>
                    <button class="btn btn-primary">Editar</button>
                </a>
                <button class="btn btn-danger" class = 'm-1'>Apagar</button>
            </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
