<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class CentroUniversitario extends Model
{
	
	protected $fillable = ['nombre'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'centros_universitarios';

}
/*
	public function ()
	{
		return $this->hasMany('App\ ');
		return $this->belongsToMany('App\ ');
		return $this->belongsTo('App\ ');
	}
*/