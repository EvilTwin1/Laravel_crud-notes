<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    protected $fillable = ['title','description','_token'];
    use SoftDeletes;
}
