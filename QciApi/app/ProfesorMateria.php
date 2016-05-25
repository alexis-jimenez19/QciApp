<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ProfesorMateria extends Model
{
	
	protected $fillable = ['profesor_id','materia'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'profesor_materia';

	public function profesor()
	{
		return $this->belongsTo('App\Profesor');
	}

	public function valoracionesProfesores()
	{
		return $this->hasMany('App\ValoracionProfesor');
	}

	public function comentarios()
	{
		return $this->hasMany('App\ComentarioProyecto');
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