<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';

    protected $fillable = [

        'id',
        'title',
        'completed',
        'created_at',
        'updated_at'
    ];

    public $timestamps = true;

}
