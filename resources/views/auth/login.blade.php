@extends('layouts.main_page')

@section('content')
    <a href="#" class="logo"></a>
    {!! form_start($form) !!}
    {!! form_rest($form) !!}
    <a class="btn btn-link" href="{{ url('/password/email') }}">Забыли пароль?</a>
    {!! form_end($form) !!}
@endsection
