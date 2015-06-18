<?php

use \SleepingOwl\Admin\Admin;
use \SleepingOwl\Admin\Columns\Column;
use \SleepingOwl\Admin\Models\Form\FormItem;

Admin::model('\App\SiteContent')->title('Контент')
    ->with('user', 'content_type', 'content_theme')->filters(function ()
{

})->columns(function ()
{
    Column::string('id', 'ID');
    Column::string('title', 'Название');
    Column::string('content_type.title', 'Тип контента');
    Column::string('content_theme.title', 'Тематика');
})->form(function ()
{
	FormItem::text('title', 'Название');
	FormItem::ckeditor('content', 'Контент');
	FormItem::select('user_id', 'Пользователь')->list('\App\User');
	FormItem::select('content_type_id', 'Тип контента')->list('\App\ContentType');
	FormItem::select('content_theme_id', 'Тематика контента')->list('\App\ContentTheme');
	FormItem::image('background', 'Фон');
	FormItem::file('file', 'Файл');
});