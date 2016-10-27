@extends('os.formOsBase')

@section('action')
    <form action="{{action('OsController@edita')}}" method="post">
@stop

@section('id')
    <input type="hidden" name="id" value="{{$os->id or ''}}">
@stop

@section('btn')
    <input class="btn btn-primary col-xs-4 col-xs-offset-5" type="submit" value="Salvar Edição">
@stop
