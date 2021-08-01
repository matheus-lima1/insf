@extends('layouts.app') 

@section('content')
<form action="{{route('ceremonialists.store')}}" method="post" class="col-lg-12" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Nome do Cerimonialista*</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" required>

        @error('name')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>CPF *</label>
        <input type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror" value="{{old('cpf')}}" required>

        @error('cpf')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>E-mail *</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required>

        @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Atuação *</label>
        <select class="form-control form-control-sm" name="sex" required>
            <option value="altar">Coroinha</option>
            <option value="helper">Ajudante</option>
            <option value="singer">Cantor</option>
        </select>

        @error('acting')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>CEP *</label>
        <input type="number" name="cep" class="form-control @error('cep') is-invalid @enderror" value="{{old('cep')}}" required>

        @error('cep')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>


    <div class="form-group">
        <label>Bairro *</label>
        <input type="text" name="neighborhood" class="form-control @error('neighborhood') is-invalid @enderror" value="{{old('neighborhood')}}" required>

        @error('neighborhood')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Rua *</label>
        <input type="text" name="street" class="form-control @error('street') is-invalid @enderror" value="{{old('street')}}" required>

        @error('street')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Número *</label>
        <input type="number" name="number" class="form-control @error('number') is-invalid @enderror" value="{{old('number')}}" required>

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
        <label>Data de Nascimento *</label>
        <input type="date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{old('birth_date')}}" required>

        @error('dateBirth')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Telefone *</label>
        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" required>

        @error('phone')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Senha *</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" required>

        @error('password')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    


    <div>
        <button type="submit" class="btn btn-lg btn-success">Registrar Cerimonialista</button>
    </div>
</form>

@endsection

