<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Profesor extends Model
{
	
	protected $fillable = ['id','foto','nombre','division','correo','ubicacionOficina','centro_universitario_id'];
	
	protected $hidden = ['created_at','updated_at'];
	
	protected $table = 'profesores';

	public function centroUniversitario()
	{
		return $this->belongsTo('App\CentroUniversitario');
	}

	public function profesorMateria()
	{
		return $this->hasMany('App\ProfesorMateria');
	}

}
/*
	public function ()
	{
		return $this->hasMany('App\ ');
		return $this->belongsToMany('App\ ');
		return $this->belongsTo('App\ ');
	}
*/