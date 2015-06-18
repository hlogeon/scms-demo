<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class Login extends Form
{
    public function buildForm()
    {
        $this->add('email', 'email', [
            'attr' => ['placeholder' => 'Ваш email', 'name' => 'email', 'class' => ''],
            'label' => null,
            'label_attr' => ['style' => 'display:none']
        ])
            ->add('password', 'password', [
                'attr' => ['placeholder' => 'Пароль', 'name' => 'password', 'class' => ''],
                'label' => null,
                'label_attr' => ['style' => 'display:none']
            ])
            ->add('remember', 'checkbox', [
                'attr' => ['id' => 'agreement', 'name' => 'remember', 'class' => ''],
                'label_attr' => ['for' => 'agreement', 'class' => 'agreement'],
                'label' => 'Запомнить пароль'
            ])
            ->add('submit', 'submit', [
                'label' => 'Войти',
                'attr' => ['class' => '']
            ]);
    }
}