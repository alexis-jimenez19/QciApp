<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ComentarioProyecto extends Model
{
	
	protected $fillable = ['idProyecto','idUsuario','comentario'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'comentarios_proyectos';

	public function usuario()
	{
		return $this->belongsTo('App\Usuario');
	}

	public function proyecto()
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