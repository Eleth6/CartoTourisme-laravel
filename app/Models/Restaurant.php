<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Restaurant extends Model
{
    use HasFactory;
    use Sluggable;

    //protected $connection = 'mysql2';
    protected $table = 'restaurants';
    
    protected $fillable = ['nameRest', 'typeRest', 'slug', 'mainImage', 'textRest', 'summaryRest', 
    'horairesRest', 'adresseRest', 'prixRest', 'siteInternet', 'phone', 'latitude', 'longitude'];

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'nameRest'
            ]
        ];
    }

    public function setTypeRestAttribute($value)
    {
        $this->attributes['typeRest'] = json_encode($value);
    }

    public function getTypeRestAttribute($value)
    {
        return $this->attributes['typeRest'] = json_decode($value);
    }
}
