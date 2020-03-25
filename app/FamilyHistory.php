<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyHistory extends Model
{
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
