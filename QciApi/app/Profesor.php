<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Profesor extends Model
{
	
	protected $fillable = ['foto','nombre','division','correo','ubicacionOficina','idCentroUniversitario'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'profesores';

}
/*
	public function ()
	{
		return $this->hasMany('App\ ');
		return $this->belongsToMany('App\ ');
		return $this->belongsTo('App\ ');
	}
*/