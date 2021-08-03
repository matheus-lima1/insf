@extends('layouts.app') 

@section('content')
    <a href="{{route('ceremonialists.create')}}" class="btn btn-lg mb-3" style="background-color:  #ED9021; color:white">Registrar Cerimonialista</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Atuação</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ceremonialists as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->cpf}}</td>
                    <td>{{$c->email}}</td>
                    @if($c->acting == 'singer')
                        <td>Cantor</td>
                    @elseif($c->acting == 'helper')
                        <td>Ajudante</td>
                    @else
                        <td>Coroinha</td>
                    @endif
                    <td>{{$c->phone}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('ceremonialists.edit',['ceremonialist' => $c->id])}}" class="btn btn-sm btn-primary">EDITAR</a>

                            <form action="{{route('ceremonialists.destroy',['ceremonialist' => $c->id])}}" method="POST">
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