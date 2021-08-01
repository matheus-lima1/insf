@extends('layouts.app') 

@section('content')
<form action="{{route('ceremonies.update', ['ceremony' => $ceremony->id])}}" method="POST" class="col-lg-12" enctype="multipart/form-data">
    @csrf
    @method("PUT")

    <div class="form-group">
        <label>Data da Cerimônia</label>
        <input type="date" name="date" class="form-control" value="{{$ceremony->date}}">
    </div>

    <div class="form-group">
        <label>Horário da Cerimônia</label>
        <input type="time" name="time" class="form-control" value="{{$ceremony->time}}">
    </div>

    <div class="form-group">
        <label>Valor de Dízimo Total</label>
        <input type="number" step="any" min="0" value="00.00" name="tithe" class="form-control @error('tithe') is-invalid @enderror" value="{{old('tithe')}}">
    </div>

    <div class="form-group">
        <label>Padre</label>
        <select id="priest_id" name="priest_id" class="form-control">
            @foreach ($priests as $p)
                 <option value="{{$p->id}}" @if($ceremony->priest_id == $p->id) selected @endif>
                    {{$p->name}}
                 </option>
            @endforeach
            
        </select>
    </div>

    <div class="form-group">
        <label>Cerimonialistas</label>
        <select id="selectCeremonialists" name="ceremonialists[]" class="form-control" style="height: 200px;" multiple="multiple">
            @foreach ($ceremonialists as $c)
                 <option value="{{$c->id}}" @if($ceremony->ceremonialists->contains($c)) selected @endif>
                    {{$c->name}}
                 </option>
            @endforeach
            
        </select>
    </div>


    <div>
        <button type="submit" class="btn btn-lg btn-success">Atualizar Cerimônia</button>
    </div>
</form>

@endsection