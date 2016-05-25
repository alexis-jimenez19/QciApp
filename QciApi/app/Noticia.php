<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Noticia extends Model
{
	
	protected $fillable = ['titulo','fecha','descripcion','imagen','vistas','ubicacion','idautor','centrouniversitario_id'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'noticias';

	public function centroUniversitario()
	{
		return $this->belongsTo('App\CentroUniversitario');
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