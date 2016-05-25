<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Proyecto extends Model
{
	
	protected $fillable = ['nombre','nombreEquipo','descripcion','idUsuarioLider','idCentroUniversitario'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'proyectos';

	public function centroUniversitario()
	{
		return $this->belongsTo('App\CentroUniversitario');
	}

	public function integrantes()
	{
		return $this->hasMany('App\IntegranteProyecto');
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