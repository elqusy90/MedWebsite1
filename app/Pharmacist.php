<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
    public function patients()
    {
        return $this->belongsToMany('App\Patient', 'patient_pharmacist');
    }

    public function doctors()
    {
        return $this->belongsToMany('App\Doctor', 'doctor_pharmacist');
    }

    public function nurses()
    {
        return $this->belongsToMany('App\Nurse', 'nurse_pharmacist');
    }

    public function medicines(){
        return $this->belongsToMany('App\Medicine', 'medicine_pharmacist');
    }

    public function medicinesStores(){
        return $this->belongsToMany('App\MedicinesStore', 'medicinesstore_pharmacist');
    }

    public function PharmaceuticalCompanies()
    {
        return $this->belongsToMany('App\PharmaceuticalCompany', 'pharmacist_pharmaceuticalcompany');
    }

    public function hospitals()
    {
        return $this->belongsToMany('App\Hospital', 'pharmacist_hospital');
    }

    public function labs()
    {
        return $this->belongsToMany('App\Lab', 'pharmacist_lab');
    }

}

