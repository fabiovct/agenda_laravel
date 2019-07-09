@extends('layouts.app')
@section('content')

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>email</th>
        <th>telefone</th>
        
        <th>Criado em:</th>
        <th>Atualizado em:</th>
        <th>açoes</th>
    </tr>
    </thead>
    <tbody>
    @foreach($contacts as $c)
    <tr>
    <td>{{$c->id}}</td>
    <td>{{$c->name}}</td>
    <td>{{$c->email}}</td>
    <td>{{$c->telefone}}</td>
    <td>{{$c->create_at}}</td>
    <td>{{$c->update_at}}</td>
    <td></td>
    </tr>
    @endforeach
    
    </tbody>
</table>


@endsection