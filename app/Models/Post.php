<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'image',

    ];
    // public function user(){ ex:one to one
    //     return $this->belongsTo(User::class,'user_id','id');
    // }
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
        
    }
}
