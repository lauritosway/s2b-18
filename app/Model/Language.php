<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Language extends Model {

    protected $fillable = ['title','iso639code'];
    protected $appends = ['value'];
    public $timestamps = false;

    public static function getAllLanguages(User $user)
    {
        $languages = self::all()->keyBy('id')->toArray();

        $user_languages = self::getLanguagesByUser($user);

        foreach($user_languages AS $key => $value)
        {
            $languages[$key]['value'] = 1;
        }

        return $languages;
    }


    public function getValueAttribute()
    {
        return 0;
    }

    public static function getLanguagesByUser(User $user)
    {
        return $user->languages()->get()->keyBy('id')->toArray();
    }

    /**
     * Get the users associated with the given language
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function write($languages = [], $user_id)
    {



        return true;
    }

}