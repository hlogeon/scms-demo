<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 6:48 PM
 */


use \SleepingOwl\Admin\Admin;
use \SleepingOwl\Admin\Columns\Column;
use \SleepingOwl\Admin\Models\Form\FormItem;

Admin::model('\App\ContentTheme')->title('Тематика контента')
    ->with()->columns(function ()
    {
        Column::string('id', 'ID');
        Column::string('title', 'Название');
    })->form(function ()
    {
        FormItem::text('title', 'Название');
        FormItem::ckeditor('description', 'Описание');
    });