<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    public function patients()
    {
        return $this->belongsToMany('App\Patient', 'patient_nurse');
    }

    public function pharmacists()
    {
        return $this->belongsToMany('App\Pharmacist', 'nurse_mediciensstore');
    }

    public function hospitals()
    {
        return $this->belongsToMany('App\Hospital', 'nurse_hospital');
    }

    public function labs()
    {
        return $this->belongsToMany('App\Lab', 'nurse_lab');
    }

    public function doctors()
    {
        return $this->belongsToMany('App\Doctor', 'nurse_doctor');
    }

    public function PharmaceuticalCompanies()
    {
        return $this->belongsToMany('App\PharmaceuticalCompany', 'nurse_pharmaceuticalcompany');
    }
}
