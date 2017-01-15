<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    protected $fillable = [
      'title',
      'description',
      'medicines',

    ];

    public function scopeApproved($query)
    {
      $query->where('approved', '=', 1);
    }

    public function scopeNotApproved($query)
    {
      $query->where('approved', '=', 0);
    }
}
