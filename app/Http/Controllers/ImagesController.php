<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Libraries\Images as Images;


class ImagesController extends Controller 
{

    protected $user;

    public function __construct()
    {
        $this->middleware('auth');

        $this->user = Auth::user();
    }



    public function postUpload(Request $request, Images $image)
    {
        $this->validate($request, [
            'files' => 'required',
        ]);

        $image = $image->newPhoto();

        return ['url' => Images::getUrl('150',$image)];
    }

    /**
     * @param Request $request
     * @param Filesystem $filesystem
     */
    public function deletePhotos(Request $request, Images $image)
    {
        if($request->ajax())
        {
            $image->delete($request->input('id'));
        }
    }

    //name??
    public function editPhotos(Request $request, Images $image)
    {
        $image->setMain($request->input('id'));
    }



}