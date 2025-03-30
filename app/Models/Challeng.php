<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challeng extends Model
{
    /** @use HasFactory<\Database\Factories\ChallengFactory> */
    use HasFactory;


    public function created_by(){
        return $this->belongsTo(Admin::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
