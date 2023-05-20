<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
        
    }
    public function classes(){
        return  $this->hasOne(Classes::class);
    }
}
