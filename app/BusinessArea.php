<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 7:49 PM
 */

namespace App;


use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;

/**
 * Class BusinessArea
 * @package App
 *
 * @property $background
 * @property string $title
 * @property string $description
 * @property int $id
 */
class BusinessArea extends SleepingOwlModel implements ModelWithImageFieldsInterface{

    use ModelWithImageOrFileFieldsTrait;

    protected $guarded = [];

    public static function getList()
    {
        return static::lists('title', 'id');
    }


    public function getImageFields()
    {
        return [
            'background' => 'business/background/'
        ];
    }

}