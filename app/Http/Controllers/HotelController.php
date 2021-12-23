<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hotel;
use Cviebrock\EloquentSluggable\Services\SlugService;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::orderBy('created_at', 'desc')->paginate(9);
        return view('hotels')->with('hotels', $hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hotels.create');
    }

    public function editHotel()
    {
        $hotels = Hotel::orderBy('created_at', 'desc')->get();
        return view('dashboard.hotels.editHotel')->with('hotels', $hotels);
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
            'nameHotel' => 'required|unique:hotels',
            'mainImage' => 'required|mimes:jpg,png,jpeg',
            'summaryHotel' => 'required|max:220',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);
        
        $nameImage = preg_replace('/[^A-Za-z0-9. -]/', '', $request->nameHotel);
        $mainImage = uniqid().'-'.$nameImage.'.'.$request->mainImage->extension();
        $request->mainImage->move(public_path('images'), $mainImage);

        Hotel::create([
            'nameHotel' => $request->input('nameHotel'),
            'summaryHotel' => $request->input('summaryHotel'),
            'textHotel' => $request->input('textHotel'),
            'mainImage' => $mainImage,
            'slug' => SlugService::createSlug(Hotel::class, 'slug', $request->nameHotel),
            'adresseHotel'  => $request->input('adresseHotel'),
            'prixHotel' => $request->input('prixHotel'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'poste' => $request->input('poste'),
            'cuisine' => $request->input('cuisine'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude')
        ]);

        return redirect('/hotels')->with('message', "L'article a été publié");
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('dashboard.hotels.show')->with('hotel', Hotel::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('dashboard.hotels.edit')->with('hotel', Hotel::where('slug', $slug)->first());
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
            'nameHotel' => 'required',
            'summaryHotel' => 'required|max:220',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);
        
        Hotel::where('slug', $slug) ->update([        
            'nameHotel' => $request->input('nameHotel'),
            'summaryHotel' => $request->input('summaryHotel'),
            'textHotel' => $request->input('textHotel'),
            'mainImage' => $mainImage,
            'slug' => SlugService::createSlug(Hotel::class, 'slug', $request->nameHotel),
            'adresseHotel'  => $request->input('adresseHotel'),
            'prixHotel' => $request->input('prixHotel'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'poste' => $request->input('poste'),
            'cuisine' => $request->input('cuisine'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude')
        ]);

        return redirect('/hotels')->with('message', "L'article a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $hotel = Hotel::where('slug', $slug);
        $hotel->delete();

        return redirect('/hotels')->with('message', "L'article a été supprimé");
    }
}