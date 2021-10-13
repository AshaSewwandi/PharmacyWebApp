<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $fillable = [ 'CustomerID', 'Name', 'Email', 'Address', 'MobileNo', 'NIC','id',];

    protected $primaryKey = 'CustomerID';

    public $timestamp=false;

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

}
