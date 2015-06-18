@extends('scms::site.layouts.full_width')


@section('content')
    <div class="title">{{{$model->title}}}</div>
    {!! $model->content !!}
    @if(isset($form))
        <div class="col-md-6 col-lg-offset-3">
            {!! form($form) !!}
        </div>
    @else
        <a href="{{{$model->file->link()}}}">Скачать</a>
    @endif
@endsection