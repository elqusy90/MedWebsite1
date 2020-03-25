<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    public function patients()
    {
        return $this->belongsToMany('App\Patient', 'patient_lab');
    }

    public function doctors()
    {
        return $this->belongsToMany('App\Doctor', 'doctor_lab');
    }

    public function nurses()
    {
        return $this->belongsToMany('App\Nurse', 'nurse_lab');
    }

    public function pharmacists()
    {
        return $this->belongsToMany('App\Pharmacist', 'pharmacist_lab');
    }

    public function mediciensStores()
    {
        return $this->belongsToMany('App\MediciensStore', 'mediciensStore_lab');
    }

    public function PharmaceuticalCompanies()
    {
        return $this->belongsToMany('App\PharmaceuticalCompany', 'lab_pharmaceuticalcompany');
    }

    public function hospitals()
    {
        return $this->belongsToMany('App\Hospital', 'lab_hospital');
    }

    public function medicalReports()
    {
        $this->morphMany('App\MedicalReport', 'medicalReportable');
    }


}
