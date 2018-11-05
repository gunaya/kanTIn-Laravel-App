<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
	protected $table = 'todos';

    protected $fillable = [
    	'title', 'description', 'due_date', 'repeate', 'status', 'category_id', 'user_id',
    ];

}