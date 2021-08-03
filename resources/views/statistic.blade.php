@extends('layouts.app') 

@section('content')

<div class="header ">
    <h1>Estatisticas dos Fiéis</h1>
    <h3>Confira nos graficos abaixo a relação dos fiéis cadastrados</h3>
</div>

{{-- Essa tag <canvas> é onde o gráfico vai aparecer,
     pode colocar ela em um card, div, o que achar melhor --}}

<div class="sexo d-flex justify-content-center " style="align-items:center">
    <canvas id="charSex" width="200" height="200" style="max-width:600px;max-height:500px"></canvas> {{-- Gráfico de Sexo --}}
</div>
    <script>
        var ctx = document.getElementById('charSex').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Masculino','Feminino'],
                datasets: [{
                    label: 'Sexo',
                    data: [{{implode(',',$sex)}}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>


{{-- Essa tag <canvas> é onde o gráfico vai aparecer,
     pode colocar ela em um card, div, o que achar melhor --}}

<div class="idade d-flex justify-content-center " >
    <canvas id="ageChart" width="200" height="200" style="max-width:600px;max-height:500px"></canvas> {{-- Gráfico de Idade --}}
</div>
<script>
    const data = {
        labels: [
        'Jovens',
        'Adultos',
        'Idosos'
        ],
        datasets: [{
            label: 'Faixa Etária',
            data: [{{implode(',',$age)}}],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };
    
    const config = {
    type: 'doughnut',
    data: data,
    };
    var myChart = new Chart(
      document.getElementById('ageChart'),
      config
    );
</script>


{{-- Essa tag <canvas> é onde o gráfico vai aparecer,
     pode colocar ela em um card, div, o que achar melhor --}}

<div class="dizimo d-flex justify-content-center" >
    <canvas id="titheChart" width="200" height="200" style="max-width:600px;max-height:500px"></canvas> {{-- Gráfico de Média de Dízimo --}}
<div>
<script>
    var ctx = document.getElementById('titheChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jovens','Adultos','Idosos'],
            datasets: [{
                label: 'Sexo',
                data: [{{implode(',',$tithe)}}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<style>
    .sexo{
        margin-top: 100px;
    }
    .idade{
        margin-top: 100px;
    }
    .dizimo{
        margin-top: 100px;
    }
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
</style>
@endsection