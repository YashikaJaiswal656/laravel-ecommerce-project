<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable =[
      'name', 'cat','amount','description','detail','file',
    ];
}
