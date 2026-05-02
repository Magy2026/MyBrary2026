<?php

namespace App\Models;
use App\Models\User;
use App\Models\Rating;

use Illuminate\Database\Eloquent\Model;

class Creative extends Model
{
  protected $fillable=['title', 'user_id'];
  public function pages()
{
return $this->hasMany(Page::class)->orderBy('page_number');
}
public function user()
{
    return $this->belongsTo(User::class);
}
public function ratings()
{
    return $this->hasMany(Rating::class);
}
public function averageRating()
{
    return $this->ratings()->avg('rating');
}
}
