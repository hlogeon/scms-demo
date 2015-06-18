<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 4:57 PM
 */

namespace App;


use SleepingOwl\Models\SleepingOwlModel;

/**
 * Class ContentType
 * @package App
 * @property string $title
 * @property boolean $has_form
 * @property string $form_class
 * @property string $form_action
 * @property string $redirect_url
 */
class ContentType extends SleepingOwlModel{

    protected $guarded = [];

    public static function getList()
    {
        return static::lists('title', 'id');
    }

}