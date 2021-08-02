@extends('layouts.app') 

@section('content')


{{-- Essa tag <canvas> é onde o gráfico vai aparecer,
     pode colocar ela em um card, div, o que achar melhor --}}
<canvas id="charSex" width="200" height="200"></canvas> {{-- Gráfico de Sexo --}}
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
<canvas id="ageChart" width="200" height="200"></canvas> {{-- Gráfico de Idade --}}
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
<canvas id="titheChart" width="200" height="200"></canvas> {{-- Gráfico de Média de Dízimo --}}
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
@endsection