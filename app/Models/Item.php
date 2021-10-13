<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $fillable = [ 'ItemID', 'Name', 'Brand', 'Price', 'Quantity','id',];

    protected $primaryKey = 'ItemID';

    public $timestamp=false;

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
