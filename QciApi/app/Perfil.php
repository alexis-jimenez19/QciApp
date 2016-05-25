<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Perfil extends Model
{
	
	protected $fillable = ['idUsuario','foto','fechaNacimiento','semestre','idCarrera','facebook','twitter','googleplus'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'perfiles';
	
	public function usuario()
	{
		return $this->belongsTo('App\Usuario');
	}

	public function carrera()
	{
		return $this->belongsTo('App\Carrera');
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