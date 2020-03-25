<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Doctor extends Model
{
    public function patients()
    {
        return $this->belongsToMany('App\Patient', 'patient_doctor');
    }

    public function nurses()
    {
        return $this->belongsToMany('App\Nurse', 'nurse_doctor');
    }

    public function medicalForms()
    {
        $this->morphMany('App\MedicalForm', 'medicalFormable');
    }

    public function medicalReports()
    {
        $this->morphMany('App\MedicalReport', 'medReportable');
    }


    public function hospitals()
    {
        return $this->belongsToMany('App\Hospital', 'doctor_hospital');
    }

    public function labs()
    {
        return $this->belongsToMany('App\Lab', 'doctor_lab');
    }

    public function pharmacists()
    {
        return $this->belongsToMany('App\Pharmacist', 'doctor_pharmacist');
    }

    public function PharmaceuticalCompanies()
    {
        return $this->belongsToMany('App\PharmaceuticalCompany', 'doctor_pharmaceuticalcompany');
    }

}
