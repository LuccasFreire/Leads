@extends('layout.layout')
@section('titulo', 'HomePage')

@section('content')

<div class="container w-50">
    <div class="container d-flex justify-content-between">
        <h3 class="">Cadastrar novos leads</h3>
        <a href="{{ route('createroute')}}">
            <button class="btn btn-success mb-5">Cadastrar</button>
        </a>
    </div>
    <table class="table table-striped-columns">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">CPF</th>
            <th scope="col" class='text-center'>Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($leads as $key=>$lead)
            <tr>
              <th scope="row">{{$lead->id}}</th>
              <td>{{$lead->nome}}</td>
              <td>{{$lead->email}}</td>
              <td>{{$lead->cpf}}</td>
              <td>
                <a href="{{route('detailroute', $lead)}}" class = 'm-2'>
                    <button class="btn btn-success">Visualizar</button>
                </a>
                <a href="{{route('editroute', $lead)}}" class = 'm-2'>
                    <button class="btn btn-primary">Editar</button>
                </a>
                <a href="{{route('deleteroute', $lead->id)}}">
                    <button class="btn btn-danger" class = 'm-2'>Apagar</button>
                </a>
            </td>
            </tr>
            @endforeach
            <div class="container">
                {{ $leads->links() }}
            </div>

        </tbody>
      </table>
</div>
@endsection
