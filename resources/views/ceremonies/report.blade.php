
@extends('layouts.app') 

@section('content')

    <h1><center>Data: {{$ceremony->date}} - {{$ceremony->time}}</center></h1>
    <h2><center>Padre: {{$priest->name}}</center></h2>

    <h3>Lista de Cerimonialistas (Nome - Atuação):</h3>
    <ul>
        @foreach($ceremonialists as $ceremonialist)
            <li>{{$ceremonialist->name}} - @if($ceremonialist->acting == 'singer') Cantor(a) @elseif($ceremonialist->acting == 'helper') Ajudante @else Coroinha @endif</li>
        @endforeach
    </ul>

    <h3>Lista de Fiéis Dizimistas (Nome - Mensalidade) :</h3>
    <ul>
        @foreach($loyals as $loyal)
            <li>{{$loyal->name}} - R$ {{$loyal->tithe}}</li>
        @endforeach
    </ul>

    <h4>Dízimo arrecadado na Cerimônia: R${{$ceremony->tithe}}</h4>

@endsection