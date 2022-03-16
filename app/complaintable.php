<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complaintable extends Model
{
    protected $fillable=['title','complaintype','file','email'];
}
