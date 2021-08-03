
@extends('layouts.app') 

@section('content')

<div class="header ">
    <h1>Relatório de entrada de caixa mensal</h1>
    <h3>Confira na tabela abaixo a relação dos valores arrecadados no mês pela INSF</h3>
</div>

<div class="d-flex justify-content-center">
    <table class="w-100">
    <tr class="tr1">
        <td>Valor mensal vindo dos Fiéis:</td>
        <td>{{$tithe_loyals}}</td>
    </tr>
    <tr class="tr1">
        <td>Valor arrecadado nas Cerimônias no mês:</td>
        <td>{{$tithe_ceremonies}}</td>
    </tr>
    <tr>
        <td>Total:</td>
        <td>{{$total}}</td>
    </tr>
    </table>
</div>
    <!-- <h1>Relatório deste mês</h1>

    <label>Valor mensal vindo dos Fiéis: {{$tithe_loyals}}</label><br>
    <label>Valor arrecadado nas Cerimônias no mês: {{$tithe_ceremonies}}</label> <br>
    <label>Total: {{$total}}</label>
 -->

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
        font-size: 34px;
        padding: 40px 0px 30px 15px;
        color: #F44847;
    }

    .tr1{
        border-bottom: 2px solid  #F78181;
    }

    table{
        border-radius: 20px;
        border: 30px;
        background-color:#FBD9CA;
        margin: 5% 5% 0% 5%
    }
</style>
@endsection