<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract, ModelWithImageFieldsInterface {

	use Authenticatable, CanResetPassword, ModelWithImageOrFileFieldsTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'profile_image', 'info', 'company_info'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public static function getList()
    {
        return static::lists('email', 'id');
    }

    public function getImageFields()
    {
        return [
            'profile_image' => 'users/',
        ];
    }

    public function validate()
    {
        return true;
    }

}
