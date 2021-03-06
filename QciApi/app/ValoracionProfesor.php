<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ValoracionProfesor extends Model
{
	
	protected $fillable = ['id','usuario_id','profesormateria_id','valoracion'];
	
	protected $hidden = ['created_at','updated_at'];
	
	protected $table = 'valoraciones_profesores';

	public function usuario()
	{
		return $this->belongsTo('App\Usuario');
	}

	public function profesorMateria()
	{
		return $this->belongsTo('App\ProfesorMateria');
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