<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 6:41 PM
 */

namespace App;


use SleepingOwl\Models\SleepingOwlModel;

/**
 * Class ContentTheme
 * @package App
 *
 * @property int $id
 * @property string $title
 * @property string $description
 */
class ContentTheme extends SleepingOwlModel{


    protected $guarded = [];

    public static function getList()
    {
        return static::lists('title', 'id');
    }




}