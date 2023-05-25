<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hostel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->hasMany(User::class);
        
    }
    public function teacher(){
        return  $this->hasOne(Teacher::class);
    }
}
