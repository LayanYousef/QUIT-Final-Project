<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_post extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    public function tags(){
        //return $this->belongsToMany(Tag::class);
        return $this->belongsToMany(Tag::class, foreignPivotKey: "data_post_id");//belongs to + many (both)
    }

    //I dont think this method is useful for me
    public function tag(string $name){

        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);

    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
