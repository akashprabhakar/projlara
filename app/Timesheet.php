<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    //
	protected $fillable = [

		'task_date',
		'proj_name',
		'task_desc',
		'dev_initials',
		'reference',
		'hours',
		'solution'

	];

	 public function user()
    {
        return $this->belongsTo('App\User');
    }
}
