<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'id';
    function category()
    {
        return $this->belongsTo('App\Category');
    }
}
