<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    public function data_posts(){
        return $this->belongsToMany(data_post::class);
    }

    //I dont think this method is useful for me
    public function data_post(string $name){

        $data_post = data_post::firstOrCreate(['name' => $name]);
        $this->data_posts()->attach($data_post);

    }
}
