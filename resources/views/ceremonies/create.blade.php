@extends('layouts.app') 

@section('content')
<form action="{{route('ceremonies.store')}}" method="post" class="col-lg-12" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Data da Cerimônia</label>
        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{old('date')}}">

        @error('date')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Horário da Cerimônia</label>
        <input type="time" name="time" class="form-control @error('time') is-invalid @enderror" value="{{old('time')}}">

        @error('time')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Valor de Dízimo Total</label>
        <input type="number" step="any" min="0" value="00.00" name="tithe" class="form-control @error('tithe') is-invalid @enderror" value="{{old('tithe')}}">

        @error('tithe')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>


    <div class="form-group">
        <label>Padre</label>
        <select id="priest_id" name="priest_id" class="form-control">
            @foreach ($priests as $p)
                <option value="{{$p->id}}">
                    {{$p->name}}
                </option>
            @endforeach
            
        </select>
    </div>

    <div class="form-group">
        <label>Cerimonialistas</label>
        <select id="ceremonialists" name="ceremonialists[]" class="form-control" style="height: 200px;" multiple="multiple">
            @foreach ($ceremonialists as $c)
                <option value="{{$c->id}}">
                    {{$c->name}}
                </option>
            @endforeach
            
        </select>
    </div>
    


    <div>
        <button type="submit" class="btn btn-lg btn-success">Registrar Cerimonia</button>
    </div>
</form>

@endsection

