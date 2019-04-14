<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use SoftDeletes;
    
    protected $dates = [
        'due_date',
        'created_at',
        'updated_at',
        'deleted_at'
];
}


