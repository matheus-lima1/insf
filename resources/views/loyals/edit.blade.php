@extends('layouts.app') 

@section('content')
<form action="{{route('loyals.update', ['loyal' => $loyal->id])}}" method="POST" class="col-lg-12" enctype="multipart/form-data">
    @csrf
    @method("PUT")

    <div class="form-group">
        <label>Nome do Fiel</label>
        <input type="text" name="name" class="form-control" value="{{$loyal->name}}">
    </div>

    <div class="form-group">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control" value="{{$loyal->cpf}}">
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" value="{{$loyal->email}}">
    </div>

    <div class="form-group">
        <label>CEP</label>
        <input type="text" name="cep" class="form-control" value="{{$loyal->cep}}">
    </div>

    <div class="form-group">
        <label>Bairro</label>
        <input type="text" name="neighborhood" class="form-control" value="{{$loyal->neighborhood}}">
    </div>

    <div class="form-group">
        <label>Rua</label>
        <input type="text" name="street" class="form-control" value="{{$loyal->street}}">
    </div>

    <div class="form-group">
        <label>Número</label>
        <input type="number" name="number" class="form-control" value="{{$loyal->number}}">
    </div>

    <div class="form-group">
        <label>Complemento</label>
        <input type="text" name="complement" class="form-control" value="{{$loyal->complement}}">
    </div>

    <div class="form-group">
        <label>Complemento</label>
        <select class="form-control form-control-sm" name="sex">
            <option value="m">Masculino</option>
            <option value="f">Feminino</option>
        </select>
    </div>

    <div class="form-group">
        <label>Data de Nascimento</label>
        <input type="date" name="birth_date" class="form-control" value="{{$loyal->birth_date}}">
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" name="phone" class="form-control" value="{{$loyal->phone}}">
    </div>

    <div class="form-group">
        <label>Dízimo Mensal</label>
        <input type="number" step="any" min="0" name="tithe" class="form-control" value="{{$loyal->tithe}}">
    </div>

    <div>
        <button type="submit" class="btn btn-lg" style="background-color:  #ED9021; color:white">Atualizar Fiel</button>
    </div>
</form>

@endsection