
@extends('layouts.app') 

@section('content')
<div class="header">
    <h1><center>Data: {{$ceremony->date}} - {{$ceremony->time}}</center></h1>
    <h2><center>Padre: {{$priest->name}}</center></h2>
</div>
<div class="d-flex justify-content-center">
    <table class="w-100">

        <tr class="tr1">
            <td><h3>Lista de Cerimonialistas (Nome - Atuação):</h3></td>
        </tr>

        @foreach($ceremonialists as $ceremonialist)
        <tr class="tr2">
            <td class="pl-5">{{$ceremonialist->name}} - @if($ceremonialist->acting == 'singer') Cantor(a) @elseif($ceremonialist->acting == 'helper') Ajudante @else Coroinha @endif</td>
        </tr>
        @endforeach

        <tr class="tr1">
            <td><h3>Lista de Fiéis Dizimistas (Nome - Mensalidade) :</h3></td>
        </tr>

        @foreach($loyals as $loyal)
            <tr class="tr2">
                <td class="pl-5">{{$loyal->name}} - R$ {{$loyal->tithe}}</td>
            </tr>
        @endforeach

        <tr style="font-size: 34px;">
            <td>Dízimo arrecadado na Cerimônia:</td>
            <td>R${{$ceremony->tithe}}</td>
        </tr>
    </table>
</div>

@endsection

<style>
    .header{
        top : -100px;
        background-color: #FBFBEF;
        padding: 50px 0px ;
        margin-left: -3.35%;
        margin-right: -3.35%;
        margin-top: -4%;
        padding-left: 50px;
        color: #F44847;
    }

    
    td{
        text-align: left;
        padding: 8px;
        padding: 40px 0px 30px 15px;
        color: #F44847;
    }

    .tr1{
        border-bottom: 3px solid  #F78181;
        font-size: 34px;
    }

    .tr2{
        border-bottom: 1px solid  #F78181;
        font-size: 24px;
    }

    table{
        border-radius: 20px;
        border: 30px;
        background-color:#FBD9CA;
        margin: 5% 5% 0% 5%
    }
    </style>