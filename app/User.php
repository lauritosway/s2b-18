<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Pingpong\Trusty\Traits\TrustyTrait;

class User extends Model implements AuthenticatableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, TrustyTrait;

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
    protected $fillable = ['name', 'username','email','password','about','image','filled', 'status', 'title','linkedin'];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function languages()
    {
        return $this->belongsToMany('App\Model\Language');
    }
    
    public function getFilledAttribute($data)
    {
        return json_decode($data);
    }

    public function setFilledAttribute($data)
    {
        $this->attributes['filled'] = json_encode($data);
    }


    public function setFilled($value,$position)
    {
        $filled = $this->filled;
        $filled[$position] = $value;
        $this->filled = $filled;

        return $filled;
    }

    /**
     * Get gravatar url.
     *
     * @param int    $size
     * @param string $default
     * @param string $rating
     *
     * @return string
     */
    public function gravatar($size = 60, $default = 'mm', $rating = 'g')
    {
        $email = $this->email;

        return 'http://www.gravatar.com/avatar/'.md5(strtolower(trim($email)))."?s={$size}&d={$default}&r={$rating}";
    }

    /**
     * Scope "today".
     *
     * @param mixed $query
     *
     * @return mixed
     */
    public function scopeToday($query)
    {
        $sql = 'date(created_at) = date(now())';

        if (db_is('sqlite')) {
            $sql = "date(created_at) = date('now')";
        }

        return $query->whereRaw($sql);
    }
}
