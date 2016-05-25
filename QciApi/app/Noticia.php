<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Noticia extends Model
{
	
	protected $fillable = ['titulo','fecha','descripcion','imagen','vistas','ubicacion','idautor','idCentroUniversitario'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'noticias';

}
/*
	public function ()
	{
		return $this->hasMany('App\ ');
		return $this->belongsToMany('App\ ');
		return $this->belongsTo('App\ ');
	}
*/