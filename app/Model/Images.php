<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Images extends Model 
{

    protected $table = 'images';
    protected $fillable = ['name','url','main','user_id'];

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}