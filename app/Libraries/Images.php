<?php

namespace App\Libraries;


use Auth;
use App\Model\Images as Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Config;


class Images 
{
	private $path;
	private $url;
    private $resize = ['720','480'];
    private $cut = [ ['534','400'] ];
    private $fit = ['263','150'];
    private $directories = ['720','480','400','263','150'];

    public function newPhoto($file = null)
    {
        if(is_null($file))
            $file = Input::file('files')[0];

        $this->path = Config::get('filesystems.disks.local.root') .'/images/users';

        $this->createDirectories();

        $url = uniqid(null,true) .'.jpg';

		$this->resize($file, $url);

        foreach ( $this->getSizes() as $size)
        {
            $file = Storage::disk('local')->get("/images/users/{$size}/{$url}");
        }

        $user = Auth::user();
        $user->image = $url;
        $user->save();  

        return $url;
    }

    public function newPhotoUser($userId)
    {
       
        $file = Input::file('photo');

        $this->path = Config::get('filesystems.disks.local.root') .'/images/users';

        $this->createDirectories();

        $url = uniqid(null,true) .'.jpg';

        $this->resize($file, $url);

        foreach ( $this->getSizes() as $size)
        {
            $file = Storage::disk('local')->get("/images/users/{$size}/{$url}");
        }

        $user = \App\User::whereId($userId)->first();
        $user->image = $url;
        $user->save();  

        return $url;
    }


    public function resize($file, $url)
    {

        $image = Image::make($file);

        foreach($this->resize AS $size)
        {
            $image->resize(null,$size, function ($c)
            {
                $c->aspectRatio();
            })->save($this->path . "/$size/{$url}");
        }

        $image = Image::make($file);

        foreach($this->cut AS $size)
        {
            $image->fit($size[0],$size[1])->save($this->path ."/{$size[1]}/{$url}");

        }


        $image = Image::make($file);

        foreach($this->fit AS $size)
        {
            $image->fit($size)->save($this->path ."/{$size}/{$url}");

        }
    }

    private function createDirectories()
    {
        foreach($this->directories AS $dir)
        {
            Storage::disk('local')->makeDirectory('images/users/'.$dir);
        }
    }

    public function getSizes()
    {
        $sizes = array_merge($this->resize,$this->fit);

        foreach($this->cut AS $size)
        {
            $sizes[] = $size[1];
        }

        return $sizes;
    }

    public static function getUrl($size, $name = null)
    {
        if(!$name)
            return secure_asset("img/unknown.jpg");

        return  asset('images/users/' . $size .'/'.$name); 
    }


}
