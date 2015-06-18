<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 6:00 PM
 */

namespace App\Forms;


use Kris\LaravelFormBuilder\Form;

class Download extends Form{


    public function buildForm()
    {
        $this->add('email', 'email');
        $this->add('name', 'text', [
            'label' => 'Имя'
        ]);
        $this->add('content_id', 'hidden', [
           'default_value' => $this->getData('content_id'),
        ]);
        $this->add('submit', 'submit', [
           'label' => 'Скачать',
            'wrapper' => ['target' => '_blank'],
            'wrapper_tag' => 'a',
        ]);
    }


}