<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $primaryKey = 'RoleID';

    public $sortable = ['RoleID', 'name'];

    public function users(){
        return $this->belongsToMany(User::class, 'users');
    }

    public function user(){
        return $this->hasMany(User::class, 'id');
    } 

    public function permission(){
        return $this->hasMany(Priviledge::class, 'PriviledgeID');
    }
}
