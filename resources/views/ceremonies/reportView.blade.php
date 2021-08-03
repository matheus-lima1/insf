@extends('layouts.app') 

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Data</th>
                <th>Horario</th>
                <th>Padre</th>
                <th>Dízimo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ceremonies as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->date}}</td>
                    <td>{{$c->time}}</td>
                    <td>{{\App\Priest::find($c->priest_id)->name}}</td>
                    <td>R$ {{$c->tithe}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('report.ceremony',['ceremony' => $c->id])}}" class="btn btn-sm" style="background-color:  #ED9021; color:white">VISUALIAZR</a>
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection