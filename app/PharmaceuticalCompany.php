<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PharmaceuticalCompany extends Model
{
    public function medicines(){
        return $this->hasMany('App\Medicine');
    }

    public function mediciensStores(){
        return $this->belongsToMany('App\MediciensStore', 'mediciensStore_PharmaceuticalCompany');
    }

    public function doctors(){
        return $this->belongsToMany('App\Doctor', 'doctor_pharmaceuticalCompany');
    }

    public function hospitals(){
        return $this->belongsToMany('App\Hospital', 'hospital_pharmaceuticalCompany');
    }

    public function labs(){
        return $this->belongsToMany('App\Lab', 'lab_pharmaceuticalCompany');
    }

    public function pharmacists(){
        return $this->belongsToMany('App\Pharmacist', 'pharmacist_pharmaceuticalCompany');
    }

    public function nurses(){
        return $this->belongsToMany('App\Nurse', 'nurse_pharmaceuticalCompany');
    }

}
