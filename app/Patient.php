<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function medicalForms()
    {
        $this->morphMany('App\MedicalForm', 'medicalFormable');
    }

    public function medicalReports()
    {
        $this->morphMany('App\MedicalReport', 'medReportable');
    }

    public function pharmacists()
    {
        return $this->belongsToMany('App\Pharmacist', 'patient_mediciensstore');
    }

    public function hospitals()
    {
        return $this->belongsToMany('App\Hospital', 'patient_hospital');
    }

    public function labs()
    {
        return $this->belongsToMany('App\Lab', 'patient_lab');
    }

    public function doctors()
    {
        return $this->belongsToMany('App\Doctor', 'patient_doctor');
    }

    public function nurses()
    {
        return $this->belongsToMany('App\Nurse', 'patient_nurse');
    }

    public function measurments()
    {
        return $this->hasMany('App\Measurment');
    }

    public function familyHistrories()
    {
        return $this->hasMany('App\FamilyHistory');
    }

    public function analysis()
    {
        return $this->hasMany('App\Analysis');
    }

    public function visualAnalyzes()
    {
        return $this->hasMany('App\VisualAnalysis');
    }

    public function foodsystems()
    {
        return $this->belongsToMany('App\FoodSystem', 'food_systems');
    }

    public function workoutsystems()
    {
        return $this->belongsToMany('App\WorkoutSystem', 'workout_systems');
    }

}
