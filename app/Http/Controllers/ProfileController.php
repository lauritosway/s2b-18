<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Language;
use App\User;
use App\Model\Images;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Libraries\Images as ImagesLibrary;
use Auth;


class ProfileController extends Controller {

    protected $user;
    protected $new;

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);

        if(Auth::check()) {
            $this->user = Auth::user();
            $this->new = (array_sum($this->user->filled) == count($this->user->filled)) ? 0 : 1;
        }
    }

    public function show($id, Images $images, ImagesLibrary $imagesLibrary)
    {
        $profile = User::where('id', '=', $id)->first();
        $languages = $profile->languages;
        $image = $profile->image;

        return view('profile.index', compact('profile','users','image','languages'));
    }


    public function getPhotos(Images $images, ImagesLibrary $imagesLibrary)
    {

        $images = $imagesLibrary->getUrls('150');

        if($this->new && ! $this->user->filled[2])
            return view('wizard.photos', ['new' => $this->new, 'user' => $this->user, 'images' => $images]);

        return view('profile.photos', ['new' => $this->new, 'user' => $this->user, 'images' => $images]);
    }

    public function getEdit(Images $images, ImagesLibrary $imagesLibrary)
    {

        if( $this->new && ! $this->user->filled[0] )
            return view('wizard.complete', ['user' => $this->user, 'new' => $this->new, 'image' => $imagesLibrary->getUrl($this->user->image), 'languages' => Language::getAllLanguages($this->user) ]);

        if( $this->new && ! $this->user->filled[1] )
        {
            $this->user->setFilled(1,1);
            $this->user->save();

            return view('wizard.languages', ['user' => $this->user, 'languages' => Language::getAllLanguages($this->user)]);
        }

        if( $this->new )
            return Redirect::to($this->redirectToFill($this->user->filled));

        return view('profile.edit', ['user' => $this->user, 'languages' => Language::getAllLanguages($this->user) ] );
    }
   

    public function postEdit(Request $request)
    {
        if($request->has('first_name'))
        {
            $this->user->first_name = $request->input('first_name');
            $this->user->last_name = $request->input('last_name');
            $this->user->gender = $request->input('gender');
        }

        if($request->has('about'))
        {
            $this->user->about = $request->input('about');
            $this->user->linkedin = $request->input('linkedin');
            $this->user->title = $request->input('title');

            $this->user->setFilled(1,0);
        }

        if($request->has('languages'))
        {
            $this->user->setFilled(1,1);
            $this->user->languages()->sync(array_keys($request->only('languages')['languages']));
        }

        

        $this->user->save();

        if( $this->new  )
            return Redirect::to($this->redirectToFill($this->user->filled));

        return redirect('profile/edit');
    }

    /**
     * Send to next step to fill all the forms
     *
     * @param $filled
     * @param $self
     * @return string
     */
    public function redirectToFill($filled, $self = 'profile.edit')
    {
        foreach($filled AS $key => $value)
        {
            if($value == 0)
            {
                switch($key)
                {
                    case 0:
                        return route('profile.edit');
                        break;
                    case 1:
                        return route('profile.edit');
                        break;
                }

            }
        }
        return route($self);

    }

}