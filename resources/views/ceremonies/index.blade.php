@extends('layouts.app') 

@section('content')
    <a href="{{route('ceremonies.create')}}" class="btn btn-lg mb-3" style="background-color:  #ED9021; color:white">Registrar Ceromônia</a>

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
                            <a href="{{route('ceremonies.edit',['ceremony' => $c->id])}}" class="btn btn-sm btn-primary">EDITAR</a>

                            <form action="{{route('ceremonies.destroy',['ceremony' => $c->id])}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger">REMOVER</button>
                            </form>

                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection