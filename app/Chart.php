<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    protected $fillable = [
      'title',
      'description',
      'medicines',
      'published_at'
    ];
}
