<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalForm extends Model
{
    public function medicalFormable()
    {
        return $this->morphTo();
    }

    public function medicines()
    {
        return $this->belongsToMany('App\Medicine', 'medicine_medicalform');
    }

}
