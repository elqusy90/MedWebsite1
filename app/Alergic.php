<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alergic extends Model
{

    public function foodsInteraction()
    {
        return $this->belongsToMany('App\Food', 'alergic_food_interactions');
    }

    public function supplementsInteraction()
    {
        return $this->belongsToMany('App\Supplement', 'alergic_supplement_interactions');
    }

    public function drugsInteraction()
    {
        return $this->belongsToMany('App\Medicine', 'drug_alergic_interactions');
    }

    public function drugscure()
    {
        return $this->belongsToMany('App\Alergic', 'drug_alergic_cures');
    }
}
