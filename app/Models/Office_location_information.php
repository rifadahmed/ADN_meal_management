<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office_location_information extends Model
{
    use HasFactory;

    public function getCompanyName(){
        return $this->belongsTo('App\Models\Sbu_information','sbu_id');
    }
}
