<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Horario extends Model
{
	
	protected $fillable = ['idUsuario','idCalendario','materia','inicialesMateria','profesor','horaInicio','horaFin','edificioSalon','calificacion'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'horarios';

}
/*
	public function ()
	{
		return $this->hasMany('App\ ');
		return $this->belongsToMany('App\ ');
		return $this->belongsTo('App\ ');
	}
*/