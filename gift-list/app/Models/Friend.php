<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GiftModel;

class Friend extends Model
{
    use HasFactory;

    public function gifts(){
        return $this->hasMany(GiftModel::class);
    }
}
