<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
//use \App\Models\HasMany;

class Employer extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function data_post(){
        return $this->HasMany(data_post::class);
    }
    public function tag(){
        return $this->hasMany(Tag::class);
    }
}
