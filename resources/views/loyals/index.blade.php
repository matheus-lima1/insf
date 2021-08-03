@extends('layouts.app') 

@section('content')
    <a href="{{route('loyals.create')}}" class="btn btn-lg mb-3" style="background-color:  #ED9021; color:white">Registrar Fiel Dizimista</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Fiel</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Dízimo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($loyals as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->cpf}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->tithe}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('loyals.edit',['loyal' => $p->id])}}" class="btn btn-sm btn-primary">EDITAR</a>

                            <form action="{{route('loyals.destroy',['loyal' => $p->id])}}" method="POST">
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