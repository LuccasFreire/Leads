@extends('layout.layout')
@section('titulo', 'Editar Lead')

@section('content')
<form method="POST" action="{{ url("update",$lead->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">Nome:</label>
      <input type="text" class="form-control" name = "nome"  placeholder={{$lead->nome}}>
    </div>
    <div class="mb-3">
      <label class="form-label">Email:</label>
      <input type="email" class="form-control" name = "email"placeholder={{$lead->email}} aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label class="form-label">CPF:</label>
        <input type="text" class="form-control" name= "cpf" placeholder={{$lead->cpf}}>
      </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
@endsection
