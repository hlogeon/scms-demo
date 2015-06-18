<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 4:52 PM
 */

namespace App;


use SleepingOwl\Models\Interfaces\ModelWithFileFieldsInterface;
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;

/**
 * Class SiteContent
 * @package App
 *
 * @property string $title
 * @property string $content
 * @property string $file
 * @property integer $user_id
 * @property integer $content_type_id
 * @property integer $content_theme_id
 * @property ContentType $content_type
 * @property ContentTheme $content_theme
 * @property User $user
 *
 */
class SiteContent extends SleepingOwlModel implements ModelWithFileFieldsInterface, ModelWithImageFieldsInterface{

    use ModelWithImageOrFileFieldsTrait;

    protected $guarded = [];

    public function getFileFields()
    {
        return [
            'file' => 'content/',
        ];
    }

    public function getImageFields()
    {
        return [
            'background' => 'content/backgrounds/',
        ];
    }

    public static function getList()
    {
        return static::lists('title', 'id');
    }


    public function content_type()
    {
        return $this->belongsTo('App\ContentType');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function content_theme()
    {
        return $this->belongsTo('App\ContentTheme');
    }

}