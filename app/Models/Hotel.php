<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Hotel extends Model
{
    use HasFactory;
    use Sluggable;

    //protected $connection = 'mysql2';
    protected $table = 'hotels';
    
    protected $fillable = ['nameHotel', 'slug', 'mainImage', 'textHotel', 'summaryHotel',
    'adresseHotel', 'prixHotel', 'email', 'phone', 'poste', 'cuisine', 'latitude', 'longitude'];

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'nameHotel'
            ]
        ];
    }
}
