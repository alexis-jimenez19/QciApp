<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ComentarioProfesor extends Model
{
	
	protected $fillable = ['id','profesormateria_id','comentario','usuario_id'];
	
	protected $hidden = ['created_at','updated_at'];
	
	protected $table = 'comentarios_profesores';

	public function profesorMateria()
	{
		return $this->belongsTo('App\Profesor');
	}

	public function usuario()
	{
		return $this->belongsTo('App\Usuario');
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