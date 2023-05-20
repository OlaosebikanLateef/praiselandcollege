<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function students(){
        return $this->belongsTo(Students::class);
        
    }
    public function teacher(){
        return  $this->hasOne(Teacher::class);
    }

    
}
