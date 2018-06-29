<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Pingpong\Admin\Entities\Article;
use Pingpong\Admin\Repositories\Articles\ArticleRepository;
use App\Libraries\Images as Images;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Article $articles)
    {
        $posts = $articles->orderBy('created_at', 'desc')->onlyPost()->take(3)->get();

        return view('pages.home', compact('posts'));
    }

    public function blog(Article $articles)
    {
        $posts = $articles->orderBy('published_at', 'desc')->onlyPost()->take(10)->get();

        return view('pages.blog', compact('posts'));
    }

    public function getArticle($slug, ArticleRepository $articles)
    {
        $post = $articles->findBySlug($slug)->get()[0];

        return view('pages.post', compact('post'));
    }

    public function getBook($id)
    {
        $i = 0;
        $spaces = array_merge(config('spaces.escorial'), config('spaces.travessera'),config('spaces.verdi'));

        while ($spaces[$i]['id'] != $id) {
            $i++;
        }

        return view('pages.book', ['venue' => $spaces[$i]]);
    }

    public function postBook(Request $request)
    {
        $data = $request->only('email', 'phone', 'name', 'check_in', 'check_out', 'people', 'text', 'venueName','venueType');

        \Mail::send('emails.book', $data, function ($message) use ($data) {
            $message->to('info@start2bee.com', 'Start2bee');
            $message->from($data['email'], $data['name']);
            $message->subject('['.Carbon::now().'] Contacto');
        });

        return redirect('/booked');
    }

    public function sendEmail(Request $request)
    {
        $data = $request->only('email', 'phone', 'name', 'text');

        \Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('info@start2bee.com', 'Start2bee');
            $message->from($data['email'], $data['name']);
            $message->subject('['.Carbon::now().'] Contacto');
        });
    }

    public function getAddUser()
    {
        return view('auth.addUser');
    }

    public function postAddUser(Request $request, Images $image)
    {
        $data = $request->all();
        $user = \App\User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'filled'  => [0,0], 
            "linkedin" => $data['linkedin'],
            "title" => $data['title'],
            "about" => $data['about'],
            'password' => bcrypt('josejose1')
        ]);
        $image = $image->newPhotoUser($user->id);
        return redirect('addUser');
    }
}
