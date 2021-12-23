<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Restaurant;
use Cviebrock\EloquentSluggable\Services\SlugService;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::orderBy('created_at', 'desc')->paginate(9);
        return view('restaurants')->with('restaurants', $restaurants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.restaurants.create');
    }

    public function editRestaurant()
    {
        $restaurants = Restaurant::orderBy('created_at', 'desc')->get();
        return view('dashboard.restaurants.editRestaurant')->with('restaurants', $restaurants);
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
            'nameRest' => 'required',
            'summaryRest' => 'required|max:220',
            'mainImage' => 'required|mimes:jpg,png,jpeg',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);
        
        $nameImage = preg_replace('/[^A-Za-z0-9. -]/', '', $request->nameRest);
        $mainImage = uniqid().'-'.$nameImage.'.'.$request->mainImage->extension();
        $request->mainImage->move(public_path('images'), $mainImage);

        $input = $request->all();
        $input['typeRest'] = $request->input('typeRest');
        Restaurant::create($input);

        Restaurant::create([
            'nameRest' => $request->input('nameRest'),
            'textRest' => $request->input('textRest'),
            'typeRest' => $request->input('typeRest'),
            'summaryRest' => $request->input('summaryRest'),
            'mainImage' => $mainImage,
            'slug' => SlugService::createSlug(Restaurant::class, 'slug', $request->nameRest),
            'horairesRest' => $request->input('horairesRest'),
            'adresseRest'  => $request->input('adresseRest'),
            'prixRest' => $request->input('prixRest'),
            'siteInternet' => $request->input('siteInternet'),
            'phone' => $request->input('phone'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude')
        ]);

        return redirect('/restaurants')->with('message', "L'article a été publié");
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('dashboard.restaurants.show')->with('restaurant', Restaurant::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('dashboard.restaurants.edit')->with('restaurant', Restaurant::where('slug', $slug)->first());
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
            'nameRest' => 'required',
            'summaryRest' => 'required|max:220',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);
        
        Restaurant::where('slug', $slug) ->update([        
            'nameRest' => $request->input('nameRest'),
            'textRest' => $request->input('textRest'),
            'summaryRest' => $request->input('summaryRest'),
            'slug' => SlugService::createSlug(Restaurant::class, 'slug', $request->nameRest),
            'horairesRest' => $request->input('horairesRest'),
            'adresseRest'  => $request->input('adresseRest'),
            'prixRest' => $request->input('prixRest'),
            'siteInternet' => $request->input('siteInternet'),
            'phone' => $request->input('phone'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude')
        ]);

        return redirect('/restaurants')->with('message', "L'article a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $restaurant = Restaurant::where('slug', $slug);
        $restaurant->delete();

        return redirect('/restaurants')->with('message', "L'article a été supprimé");
    }
}