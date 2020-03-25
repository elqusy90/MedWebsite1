<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{

    public function pharmaceuticalCompany()
    {
        return $this->belongsTo('App\PharmaceuticalCompany', 'PharmaceuticalCompany_id');
    }

    public function medicinesStores()
    {
        return $this->belongsToMany('App\MedicinesStore', 'medicien_medicinesstore');
    }

    public function pharmacists()
    {
        return $this->belongsToMany('App\Pharmacist', 'medicien_pharmacist');
    }


    public function foodsInteraction()
    {
        return $this->belongsToMany('App\Food', 'drug_food_interactions');
    }

    public function drugsInteraction()
    {
        return $this->belongsToMany('App\Medicine', 'drug_drug_interactions');
    }

    public function supplementsInteraction()
    {
        return $this->belongsToMany('App\Supplement', 'drug_supplement_interactions');
    }

    public function alergicsInteraction()
    {
        return $this->belongsToMany('App\Alergic', 'drug_alergic_interactions');
    }

    public function alergicsCures()
    {
        return $this->belongsToMany('App\Alergic', 'drug_alergic_cures');
    }

    public function DiseasesInteraction()
    {
        return $this->belongsToMany('App\Disease','drug_disease_interactions');
    }

    public function diseasesCure(){
        return $this->belongsToMany('App\Disease', 'drug_disease_cures');
    }
}
