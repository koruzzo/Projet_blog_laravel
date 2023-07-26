<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
    use HasFactory;
    protected $guarded = [];





public static function boot()
{
    parent::boot();
    self::creating(function ($post) {
        $post->user()->associate(auth()->user()->id);
        
    });

}




/*RELATIONS*/
public function user()
{
    return $this->belongsTo(User::class);
}   

public function chirps()
{
    return $this->hasMany(Chirp::class);
}
}

