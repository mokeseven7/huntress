<?php

namespace App\Models;

use App\Models\Agent;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;

    public function organizations(){
        return $this->hasMany(Organization::class, 'id', 'organization_id');
    }

    public function agents(){
        return $this->hasMany(Agent::class, 'id', 'agent_id');
    }
}
