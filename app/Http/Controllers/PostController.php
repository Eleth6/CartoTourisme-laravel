<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);
        return view('actualite')->with('posts', $posts);
    }

    public function editEvent()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('dashboard.actualite.editEvent')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.actualite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titleArticle' => 'required|unique:posts',
            'textArticle' => 'required',
            'summaryArticle' => 'required|max:220',
            'dateArticle' => 'required',
            'imageArticle' => 'required|mimes:jpg,png,jpeg'
        ]);
        
        $nameImage = preg_replace('/[^A-Za-z0-9. -]/', '', $request->titleArticle);
        $newImageName = uniqid().'-'.$nameImage.'.'.$request->imageArticle->extension();
        $request->imageArticle->move(public_path('images'), $newImageName);

        Post::create([
            'titleArticle' => $request->input('titleArticle'),
            'textArticle' => $request->input('textArticle'),
            'summaryArticle' => $request->input('summaryArticle'),
            'dateArticle' => $request->input('dateArticle'),
            'imageArticle' => $newImageName,
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->titleArticle)
        ]);

        return redirect('/actualite')->with('message', "L'article a été publié");
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('dashboard.actualite.show')->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('dashboard.actualite.edit')->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'titleArticle' => 'required',
            'textArticle' => 'required',
            'summaryArticle' => 'required|max:220',
            'dateArticle' => 'required',
        ]);
        
        Post::where('slug', $slug) ->update([
            'titleArticle' => $request->input('titleArticle'),
            'textArticle' => $request->input('textArticle'),
            'summaryArticle' => $request->input('summaryArticle'),
            'dateArticle' => $request->input('dateArticle'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->titleArticle)
        ]);

        return redirect('/actualite')->with('message', "L'article a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/actualite')->with('message', "L'article a été supprimé");
    }
}