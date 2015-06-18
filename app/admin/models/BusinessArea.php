<?php

use \SleepingOwl\Admin\Admin;
use \SleepingOwl\Admin\Columns\Column;
use \SleepingOwl\Admin\Models\Form\FormItem;

Admin::model('\App\BusinessArea')->title('Сферы бизнеса')
    ->with()->columns(function ()
    {
        Column::string('id', 'ID');
        Column::string('title', 'Название');
    })->form(function ()
    {
        FormItem::text('title', 'Название');
        FormItem::ckeditor('description', 'Описание');
        FormItem::image('background', 'Фон');
    });