@extends('layout.layout')

@section('content')
<div class="container">
    <ul class="list-group">
        <h5 class="p-3">Id:
            <li class="list-group-item">{{$lead->id}}</li>
        </h5>
        <h5 class="p-3">Nome:
            <li class="list-group-item">{{$lead->nome}}</li>
        </h5>
        <h5 class="p-3">Email:
            <li class="list-group-item">{{$lead->email}}</li>
        </h5>
        <h5 class="p-3">CPF:
            <li class="list-group-item">{{$lead->cpf}}</li>
        </h5>
      </ul>
</div>
@endsection
