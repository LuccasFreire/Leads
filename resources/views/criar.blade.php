@extends('layout.layout')
@section('titulo', 'Criar Lead')

@section('content')
<div class="container w-50">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="text-danger"> {{ $error }} </p>
        @endforeach
    @endif
    <form method="POST" action="{{ url('store') }}" class="m-5">
        @csrf
        <div class="mb-3">
        <label class="form-label">Nome:</label>
        <input type="text" class="form-control" name = "nome" value="{{old("nome")}}">
        </div>
        <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" name = "email" required value="{{old("email")}}">
        </div>
        <div class="mb-3">
            <label class="form-label">CPF:</label>
            <input type="text" class="form-control" name= "cpf" required value="{{old("cpf")}}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
