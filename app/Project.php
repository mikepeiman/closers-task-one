<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'title', 'description', 'created_at', 'updated_at'
  ];
}
