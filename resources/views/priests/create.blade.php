@extends('layouts.app') 

@section('content')
<form action="{{route('priests.store')}}" method="post" class="col-lg-12" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Nome do Padre</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

        @error('name')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror" value="{{old('cpf')}}">

        @error('cpf')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">

        @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Data de Graduação</label>
        <input type="date" name="graduationYear" class="form-control @error('graduationYear') is-invalid @enderror" value="{{old('graduationYear')}}">

        @error('graduationYear')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>


    <div class="form-group">
        <label>Instituição</label>
        <input type="text" name="instituition" class="form-control @error('instituition') is-invalid @enderror" value="{{old('instituition')}}">

        @error('instituition')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Senha</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}">

        @error('password')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    


    <div>
        <button type="submit" class="btn btn-lg" style="background-color:  #ED9021; color:white">Registrar Padre</button>
    </div>
</form>

@endsection

