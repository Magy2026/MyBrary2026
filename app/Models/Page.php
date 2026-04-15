<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
  protected $fillable=['creative_id', 'page_number','content'];
  public function creative()
{
return $this->belongsTo(Creative::class);
}
}
