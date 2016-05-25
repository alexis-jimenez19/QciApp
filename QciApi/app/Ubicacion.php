<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Ubicacion extends Model
{
	
	protected $fillable = ['nombre','foto','idCentroUniversitario','idTipoUbicacion'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'ubicaciones';

}
/*
	public function ()
	{
		return $this->hasMany('App\ ');
		return $this->belongsToMany('App\ ');
		return $this->belongsTo('App\ ');
	}
*/