@extends('scms::site.layouts.full_width')

@section('content')
    <form id="content-select">
        {!! Form::select('type', ['-- Тип --'] + \App\ContentType::getList(), $type_id) !!}
        {!! Form::select('theme', ['-- Тематика --'] + \App\ContentTheme::getList(), $theme_id) !!}
    </form>
    @if(count($models) > 0)
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
                        {!! str_limit(strip_tags($model->content), 250) !!}
                        @if($model->content_type->has_form)
                            <a href="{{route('content.form', ['id' => $model->id])}}" class="read-more">Читать далее</a>
                        @else
                            <a href="{{route('content.view', ['id' => $model->id])}}" class="read-more">Читать далее</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    @endif

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            var form = $('#content-select');
            form.change(function(evt){
                var type = form.find('select[name=type]').val();
                var theme = form.find('select[name=theme]').val();
                console.log(type);
                console.log(theme);
                window.location = '/content/'+type+'/'+theme;
            });
        });

    </script>

@endsection