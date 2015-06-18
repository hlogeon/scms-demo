<?php
    $pages = \Hlogeon\Scms\Models\Page::where('in_menu', true)->where('published', true)->get();
?>
<div class="adm-path">
    <ul class="path-list">
        @foreach($pages as $page)
            <li><a href="{{route('page.show', ['id' => $page->id, 'type' => $page->type_id])}}">{{{$page->title}}}</a></li>
        @endforeach
        <li><a href="#">Продукт</a></li>
        <li><a href="#">Клиенты</a></li>
        <li><a href="#">Компания</a></li>
        {{--<li><a href="{{route('blog.home')}}">Блог</a></li>--}}
{{--        <li><a href="{{route('case.list')}}">Кейсы</a></li>--}}
{{--        <li><a href="{{route('content.list')}}">Контент</a></li>--}}
{{--        <li><a href="{{route('area.list')}}">Сферы бизнеса</a></li>--}}
    </ul>
    <div class="add-btns">
        <a href="#" class="help">Помощь</a>
        <a href="#" class="btn green invite">Бесплатный анализ</a>
    </div>
    <div class="clear"></div>
</div>