<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function drugsInteraction()
    {
        return $this->belongsToMany('App\Medicine', 'drug_food_interactions');
    }

    public function alergicsInteraction()
    {
        return $this->belongsToMany('App\Alergic', 'alergic_food_interactions');
    }

    public function diseasesInteraction()
    {
        return $this->belongsToMany('App\Disease', 'disease_food_interactions');
    }
}
