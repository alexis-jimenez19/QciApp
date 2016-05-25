<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ValoracionUbicacion extends Model
{
	
	protected $fillable = ['idUsuario','idUbicacion','valoracion'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'valoraciones_ubicaciones';

}
/*
	public function ()
	{
		return $this->hasMany('App\ ');
		return $this->belongsToMany('App\ ');
		return $this->belongsTo('App\ ');
	}
*/