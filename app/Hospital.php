<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    public function patients()
    {
        return $this->belongsToMany('App\Patient', 'patient_hospital');
    }

    public function labs()
    {
        return $this->belongsToMany('App\Lab', 'lab_hospital');
    }



    public function nurses()
    {
        return $this->belongsToMany('App\Nurse', 'nurse_hospital');
    }

    public function pharmacists()
    {
        return $this->belongsToMany('App\Pharmacist', 'pharmacist_hospital');
    }

    public function mediciensStores()
    {
        return $this->belongsToMany('App\MediciensStore', 'mediciensStore_hospital');
    }

    public function PharmaceuticalCompanies()
    {
        return $this->belongsToMany('App\PharmaceuticalCompany', 'hospital_pharmaceuticalcompany');
    }

    public function medicalForms()
    {
        $this->morphMany('App\MedicalForm', 'medicalFormable');
    }

    public function medicalReports()
    {
        $this->morphMany('App\MedicalReport', 'medReportable');
    }


}
