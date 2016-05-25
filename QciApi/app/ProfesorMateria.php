<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ProfesorMateria extends Model
{
	
	protected $fillable = [''];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'profesor_materia';

}
/*
	public function ()
	{
		return $this->hasMany('App\ ');
		return $this->belongsToMany('App\ ');
		return $this->belongsTo('App\ ');
	}
*/