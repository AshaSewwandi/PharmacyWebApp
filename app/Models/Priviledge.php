<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priviledge extends Model
{
    use HasFactory;

    protected $primaryKey = 'PriviledgeID';

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_priviledges', 'PriviledgeID', 'ID')->withTimestamps();
    }
}
