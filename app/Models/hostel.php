<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hostel extends Model
{
    use HasFactory;

    public function students(){
        return $this->belongsTo(Students::class);
        
    }
    public function teacher(){
        return  $this->hasOne(Teacher::class);
    }
}
