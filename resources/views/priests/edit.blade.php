@extends('layouts.app') 

@section('content')
<form action="{{route('priests.update', ['priest' => $priest->id])}}" method="POST" class="col-lg-12" enctype="multipart/form-data">
    @csrf
    @method("PUT")

    <div class="form-group">
        <label>Nome do Padre</label>
        <input type="text" name="name" class="form-control" value="{{$priest->name}}">
    </div>

    <div class="form-group">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control" value="{{$priest->cpf}}">
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" value="{{$priest->email}}">
    </div>

    <div class="form-group">
        <label>Data de Formação</label>
        <input type="date" name="graduationYear" class="form-control" value="{{$priest->graduationYear}}-01-01">
    </div>

    <div class="form-group">
        <label>Instituição</label>
        <input type="text" name="instituition" class="form-control" value="{{$priest->instituition}}">
    </div>

    <div>
        <button type="submit" class="btn btn-lg btn-success">Atualizar Padre</button>
    </div>
</form>

@endsection