
@extends('layouts.app') 

@section('content')
    <a href="{{route('priests.create')}}" class="btn btn-lg mb-3" style="background-color:  #ED9021; color:white">Registrar Padre</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Padre</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Instituição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($priests as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->cpf}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->instituition}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('priests.edit',['priest' => $p->id])}}" class="btn btn-sm btn-primary">EDITAR</a>

                            <form action="{{route('priests.destroy',['priest' => $p->id])}}" method="POST">
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