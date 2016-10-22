@extends('app')

@section('content')
    <h1 class="text-center">Ordens de Serviço</h1>
    @if(!count($osarray))
        <h6 class="text-center">Humm... ou a vaca comeu ou nenhuma ordem de serviço foi cadastrada ainda</h6>
    @else
        <table class='table table-striped table-bordered'>
            <tr>
                <th class='text-center'>OS</th>
                <th class='text-center'>Nome</th>
                <th class='text-center'>E-mail</th>
                <th class='text-center'>Descrição</th>
                <th class='text-center'>Valor</td>
                <th class='text-center'>Status</td>
                <th class='text-center'>Alterar</td>
                <th class='text-center'>Remover</td>
            </tr>
        @foreach($osarray as $os)
            <tr>
                <td class="text-center">{{$os->id}}</td>
                <td>{{$os->nome}}</td>
                <td>{{$os->email}}</td>
                <td>{{substr($os->descricao, 0, 35) . "..."}}</td>
                <td class="text-center">{{$os->preco}}</td>
                <td class="text-center">{{$os->pago == 1 ? 'Pago' : 'Não Pago'}}</td>
                <td class="text-center"><a class='btn btn-primary' href='#'>Alterar</a></td>
                <td class="text-center">
                    <form action="" method="post">
                        <input type="submit" value="Remover" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </table>
    @endif

@stop