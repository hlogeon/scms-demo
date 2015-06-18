<?php

use \SleepingOwl\Admin\Admin;
use \SleepingOwl\Admin\Columns\Column;
use \SleepingOwl\Admin\Models\Form\FormItem;

Admin::model('\App\ContentType')->title('Тип контента')
    ->with()->columns(function ()
{
    Column::string('id', 'ID');
    Column::string('title', 'Название');
})->form(function ()
{
    FormItem::text('title', 'Название');
    FormItem::checkbox('has_form', 'Has Form');
    FormItem::text('form_class', 'Form Class');
	FormItem::text('form_action', 'Form Action');
	FormItem::text('redirect_url', 'Redirect Url');
});