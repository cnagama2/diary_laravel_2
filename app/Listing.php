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

    protected $table = 'listings';

    protected $guarded = array('id');

    public $timestamps = true;

    protected $fillable = [
    'title', 'user_id', 'due_date', 
    ];
}


