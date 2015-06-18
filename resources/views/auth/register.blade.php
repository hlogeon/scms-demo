@extends('layouts.main_page')

@section('content')
    <a href="#" class="logo"></a>
    <div class="get-started">
        <p class="title">Начните с создания бесплатного аккаунта</p>
        <p>Зарегистрируйтесь бесплатно за 30 секунд.</p>
        <p>Уже есть аккаунт Patrons? <a href="{{url("auth/login")}}">Войдите</a></p>
    </div>
    {!! form_start($form) !!}
    {!! form_row($form->email) !!}
    {!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
    {!! form_row($form->password) !!}
    {!! $errors->first('password', '<div class="text-danger">:message</div>') !!}
    {!! form_row($form->check_password) !!}
    {!! form_row($form->submit) !!}

        <p class="description">Нажимая эту кнопку, Вы соглашаетесь с
            нашими <a href="#">Условиями использования.</a></p>
    {!! form_end($form) !!}
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('/js/password_checker.js')}}"></script>
@endsection
