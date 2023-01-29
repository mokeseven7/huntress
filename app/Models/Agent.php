<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    public function account(){
        return $this->belongsTo(Account::class);
    }

    public function organization(){
        return $this->belongsTo(Organization::class);
    }

   
}
