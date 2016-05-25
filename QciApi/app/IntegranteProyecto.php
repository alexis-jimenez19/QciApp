<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class IntegranteProyecto extends Model
{
	
	protected $fillable = ['idUsuario','idProyecto'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'integrantes_proyectos';
	
	public function usuario()
	{
		return $this->belongsTo('App\Usuario');
	}

	public function proyecto()
	{
		return $this->belongsTo('App\Proyecto');
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