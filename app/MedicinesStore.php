<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicinesStore extends Model
{

    public function medicines()
    {
        return $this->belongsToMany('App\Medicine', 'medicine_medicinesstore');
    }

    public function PharmaceuticalCompanies()
    {
        return $this->belongsToMany('App\PharmaceuticalCompany', 'mediciensstore_pharmaceuticalcompany');
    }

    public function pharmacists()
    {
        return $this->belongsToMany('App\Pharmacist', 'mediciensstore_pharmacist');
    }

    public function hospitals()
    {
        return $this->belongsToMany('App\Hospital', 'mediciensstore_hospital');
    }

    public function labs()
    {
        return $this->belongsToMany('App\Lab', 'mediciensstore_lab');
    }

}
