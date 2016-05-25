<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Carrera extends Model
{
	
	protected $fillable = ['nombre'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'carreras';

}
/*
	public function ()
	{
		return $this->hasMany('App\ ');
		return $this->belongsToMany('App\ ');
		return $this->belongsTo('App\ ');
	}
*/