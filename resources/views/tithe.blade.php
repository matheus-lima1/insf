
@extends('layouts.app') 

@section('content')
    <h1>Relatório deste mês</h1>

    <label>Valor mensal vindo dos Fiéis: {{$tithe_loyals}}</label><br>
    <label>Valor arrecadado nas Cerimônias no mês: {{$tithe_ceremonies}}</label> <br>
    <label>Total: {{$total}}</label>
@endsection