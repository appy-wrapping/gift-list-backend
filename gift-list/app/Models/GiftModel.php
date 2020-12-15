<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Friend;

class GiftModel extends Model
{
    use HasFactory;

    protected $fillable = ["item_name", "price", "bought", "friend_id"];

    public function friend(){
        return $this->belongsTo(Friend::class);
    }
}
