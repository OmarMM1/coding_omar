<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    /** @use HasFactory<\Database\Factories\AdminFactory> */
    use HasFactory;
    protected $fillable = [
        "name",
        "email",
        "password",
    ];
    public function categories(){
        return $this->hasMany(Category::class);
    }
  public function badges(){
    return $this->hasMany(Badge::class);
  }
  public function challenges(){
    return $this->hasMany(Challeng::class);
  }
  public function users(){
    return $this->hasMany(User::class);
  }
  public function leaderboards(){
    return $this->hasMany(Leaderboard::class);
  }

}
