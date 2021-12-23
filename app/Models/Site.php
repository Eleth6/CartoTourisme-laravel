<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Site extends Model
{
    use HasFactory;
    use Sluggable;

    //protected $connection = 'mysql2';
    protected $table = 'sites';
    
    protected $fillable = ['titleSite', 'typeSite', 'slug', 'mainImage', 'locationSite', 'textSite', 'summarySite', 
    'horairesSite', 'adresseSite', 'prixSite', 'dureeSite', 'email', 'phone', 'poste', 'latitude', 'longitude'];

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'titleSite'
            ]
        ];
    }
}
