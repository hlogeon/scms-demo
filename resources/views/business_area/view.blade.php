@extends('scms::site.layouts.full_width')

@section('content')
    <center>
        <div class="title">{{{$model->title}}}</div>
        <img src="{{{$model->background->thumbnail('medium')}}}" width="200">
        <div class="content">{!! $model->description !!}</div>
    </center>
@endsection