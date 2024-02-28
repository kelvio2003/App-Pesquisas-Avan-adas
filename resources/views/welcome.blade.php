@extends('paginas.principal')

@section('titolo','Home')

@section('conteudo')


@if(session('sms'))
<h1 class="btn btn-primary">{{session('sms')}}</h1>
@endif


@if(session('deleta'))
<h1 class="btn btn-primary">{{session('deleta')}}</h1>
@endif

@endsection
