<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable= array('id');
}
