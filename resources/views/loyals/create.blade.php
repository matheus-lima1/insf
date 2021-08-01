@extends('layouts.app') 

@section('content')
<form action="{{route('loyals.store')}}" method="post" class="col-lg-12" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Nome do Fiel</label>
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
        <label>CEP</label>
        <input type="number" name="cep" class="form-control @error('cep') is-invalid @enderror" value="{{old('cep')}}">

        @error('cep')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>


    <div class="form-group">
        <label>Bairro</label>
        <input type="text" name="neighborhood" class="form-control @error('neighborhood') is-invalid @enderror" value="{{old('neighborhood')}}">

        @error('neighborhood')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Rua</label>
        <input type="text" name="street" class="form-control @error('street') is-invalid @enderror" value="{{old('street')}}">

        @error('street')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Número</label>
        <input type="number" name="number" class="form-control @error('number') is-invalid @enderror" value="{{old('number')}}">

        @error('number')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Complemento</label>
        <input type="text" name="complement" class="form-control @error('complement') is-invalid @enderror" value="{{old('complement')}}">

        @error('complement')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Sexo</label>
        <select class="form-control form-control-sm" name="sex">
            <option value="m">Masculino</option>
            <option value="f">Feminino</option>
        </select>

        @error('sex')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Data de Nascimento</label>
        <input type="date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{old('birth_date')}}">

        @error('dateBirth')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}">

        @error('phone')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Valor de Dízimo Mensal</label>
        <input type="number" step="any" min="0" value="00.00" name="tithe" class="form-control @error('tithe') is-invalid @enderror" value="{{old('tithe')}}">

        @error('tithe')
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
        <button type="submit" class="btn btn-lg btn-success">Registrar Fiel</button>
    </div>
</form>

@endsection

