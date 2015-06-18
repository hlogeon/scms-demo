<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 7:54 PM
 */

namespace App;


use Hlogeon\Scms\Models\Page;

class CasePage extends Page{

    public function business_area()
    {
        return $this->belongsTo('App\BusinessArea');
    }

}