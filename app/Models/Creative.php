<?php

namespace App\Models;
use App\Models\User;

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
}
