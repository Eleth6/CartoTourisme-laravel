<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Site;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Site::orderBy('created_at', 'desc')->paginate(9);
        return view('sitesTouristiques')->with('sites', $sites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sitesTouristiques.create');
    }

    public function editSite()
    {
        $sites = Site::orderBy('created_at', 'desc')->get();
        return view('dashboard.sitesTouristiques.editSite')->with('sites', $sites);
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
            'titleSite' => 'required|unique:sites',
            'summarySite' => 'required|max:220',
            'mainImage' => 'required|mimes:jpg,png,jpeg',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);
        
        $nameImage = preg_replace('/[^A-Za-z0-9. -]/', '', $request->titleSite);
        $mainImage = uniqid().'-'.$nameImage.'.'.$request->mainImage->extension();
        $request->mainImage->move(public_path('images'), $mainImage);

        

        Site::create([
            'titleSite' => $request->input('titleSite'),
            'typeSite' => $request->input('typeSite'),
            'textSite' => $request->input('textSite'),
            'summarySite' => $request->input('summarySite'),
            'mainImage' => $mainImage,
            'slug' => SlugService::createSlug(Site::class, 'slug', $request->titleSite),
            'locationSite' => $request->input('locationSite'),
            'horairesSite' => $request->input('horairesSite'),
            'adresseSite'  => $request->input('adresseSite'),
            'prixSite' => $request->input('prixSite'),
            'dureeSite' => $request->input('dureeSite'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'poste' => $request->input('poste'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude')
        ]);

        return redirect('/sitesTouristiques')->with('message', "L'article a été publié");
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('dashboard.sitesTouristiques.show')->with('site', Site::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('dashboard.sitesTouristiques.edit')->with('site', Site::where('slug', $slug)->first());
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
            'titleSite' => 'required|unique:sites',
            'summarySite' => 'required|max:220',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);
        
        Site::where('slug', $slug) ->update([        
            'titleSite' => $request->input('titleSite'),
            'typeSite' => $request->input('typeSite'),
            'textSite' => $request->input('textSite'),
            'summarySite' => $request->input('summarySite'),
            'slug' => SlugService::createSlug(Site::class, 'slug', $request->titleSite),
            'locationSite' => $request->input('locationSite'),
            'horairesSite' => $request->input('horairesSite'),
            'adresseSite'  => $request->input('adresseSite'),
            'prixSite' => $request->input('prixSite'),
            'dureeSite' => $request->input('dureeSite'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'poste' => $request->input('poste'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude')
        ]);

        return redirect('/sitesTouristiques')->with('message', "L'article a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $site = Site::where('slug', $slug);
        $site->delete();

        return redirect('/sitesTouristiques')->with('message', "L'article a été supprimé");
    }
}

