<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function user(){
        return $this->belongsTo(User::class);
        
    }
    public function teacher(){
        return  $this->hasOne(Teacher::class);
    }

    public function result(){
        return  $this->belongsTo(Result::class);
    }
}
