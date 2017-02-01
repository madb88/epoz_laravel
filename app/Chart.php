<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    protected $fillable = [
      'title',
      'description',
      'medicines',
      'approved',
      'user_id'
    ];

    public function scopeApproved($query)
    {
      $query->where('approved', '=', 1);
    }

    public function scopeNotApproved($query)
    {
      $query->where('approved', '=', 0);
    }

    /**
     * Chart belongs to USER.
     */
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
