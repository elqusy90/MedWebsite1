<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalReport extends Model
{
    public function medReportable()
    {
        return $this->morphTo();
    }
}
