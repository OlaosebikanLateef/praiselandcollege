<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    use HasFactory;
    
    public function students(){
        return  $this->hasOne(Students::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
        
    }
   
}
