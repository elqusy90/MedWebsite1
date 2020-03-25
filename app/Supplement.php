<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplement extends Model
{
    public function alergicsInteraction()
    {
        return $this->belongsToMany('App\Alergic', 'alergic_supplement_interactions');
    }

    public function diseasesInteraction()
    {
        return $this->belongsToMany('App\Disease', 'disease_supplement_interactions');
    }
}
