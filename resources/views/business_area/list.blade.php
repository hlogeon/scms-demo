@extends('scms::site.layouts.full_width')

@section('content')
    @foreach($models as $model)

        <div class="col-md-4 col-sm-6">
            <div class="case">
                <div class="case-head">
                    @if($model->background->thumbnail('original'))
                        <img src="{{{$model->background->thumbnail('original')}}}">
                    @endif
                    <span class="title">{{{$model->title}}}</span>
                    </div>
                <div class="case-body">
                    <div class="date">Опубликованно {{{$model->created_at->format('d.m.Y')}}}</div>
                    {!! str_limit(strip_tags($model->description), 250) !!}
                    <a href="{{route('area.view', ['id' => $model->id])}}" class="read-more">Читать далее</a>
                </div>
            </div>
        </div>

    @endforeach

@endsection