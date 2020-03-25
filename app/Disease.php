<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $fillable=[
        'name',
        'type'
    ];
    public function drugsCure(){
        return $this->belongsToMany('App\Medicine', 'drug_disease_cures');
    }
    public function drugsInteraction()
    {
        return $this->belongsToMany('App\Medicine', 'drug_disease_interactions');
    }

    public function alergicsInteraction()
    {
        return $this->belongsToMany('App\Alergic', 'alergic_disease_interactions');
    }

    public function foodsInteraction()
    {
        return $this->belongsToMany('App\Food', 'disease_food_interactions');
    }

    public function supplementsInteraction()
    {
        return $this->belongsToMany('App\Food', 'disease_supplement_interactions');
    }
}
