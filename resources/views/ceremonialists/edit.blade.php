@extends('layouts.app') 

@section('content')
<form action="{{route('ceremonialists.update', ['ceremonialist' => $ceremonialist->id])}}" method="POST" class="col-lg-12" enctype="multipart/form-data">
    @csrf
    @method("PUT")

    <div class="form-group">
        <label>Nome do Cerimonialista</label>
        <input type="text" name="name" class="form-control" value="{{$ceremonialist->name}}">
    </div>

    <div class="form-group">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control" value="{{$ceremonialist->cpf}}">
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" value="{{$ceremonialist->email}}">
    </div>

    <div class="form-group">
        <label>Atuação *</label>
        <select class="form-control form-control-sm" name="acting" required>
            <option value="altar">Coroinha</option>
            <option value="helper">Ajudante</option>
            <option value="singer">Cantor</option>
        </select>
    </div>

    <div class="form-group">
        <label>CEP</label>
        <input type="text" name="cep" class="form-control" value="{{$ceremonialist->cep}}">
    </div>

    <div class="form-group">
        <label>Bairro</label>
        <input type="text" name="neighborhood" class="form-control" value="{{$ceremonialist->neighborhood}}">
    </div>

    <div class="form-group">
        <label>Rua</label>
        <input type="text" name="street" class="form-control" value="{{$ceremonialist->street}}">
    </div>

    <div class="form-group">
        <label>Número</label>
        <input type="number" name="number" class="form-control" value="{{$ceremonialist->number}}">
    </div>

    <div class="form-group">
        <label>Complemento</label>
        <input type="text" name="complement" class="form-control" value="{{$ceremonialist->complement}}">
    </div>

    

    <div class="form-group">
        <label>Data de Nascimento</label>
        <input type="date" name="birth_date" class="form-control" value="{{$ceremonialist->birth_date}}">
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" name="phone" class="form-control" value="{{$ceremonialist->phone}}">
    </div>


    <div>
        <button type="submit" class="btn btn-lg " style="background-color:  #ED9021; color:white">Atualizar Cerimonialista</button>
    </div>
</form>

@endsection