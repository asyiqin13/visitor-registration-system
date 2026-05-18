<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Visitor extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = ['name', 'phone', 'email'];
    
    //set semua huruf besar tanpa ubah dekat database
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
}


