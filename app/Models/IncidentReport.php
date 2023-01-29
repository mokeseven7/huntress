<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentReport extends Model
{
    use HasFactory;

    public function organization(){
        return $this->hasOne(Organization::class, 'id', 'organization_id');
    }

    public function account(){
        return $this->hasOne(Account::class, 'id', 'account_id');
    }

    public function agent(){
        return $this->hasOne(Agent::class, 'id', 'agent_id');
    }
}
