<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GiftModel;

class Friend extends Model
{
    use HasFactory;

    protected $fillable = ["name", "budget"]; // required fields to fill out 

    public function gifts(){ // connect to its gifts
        return $this->hasMany(GiftModel::class);
    }
}
