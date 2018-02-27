<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salary extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $table = 'salarys';

    public function user(){
    	return $this->belongsTo(User::class);
    }

}
