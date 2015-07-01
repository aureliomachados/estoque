@extends('layout.principal')
        <h1>Listagem de produtos</h1>

@section('conteudo')

        @if(empty($produtos))
            <div>Você não tem produtos cadastrados.</div>

        @else
        <table>
            @foreach($produtos as $p)
               <tr>
                <td>{{$p->nome}}</td>
                <td>{{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td>{{$p->quantidade}}</td>
                <td><a href="/produtos/mostra/{{$p->id}}">Visualizar</a></td>
               </tr>
            @endforeach
        </table>
        @endif
@stop