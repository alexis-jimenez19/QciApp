<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Mapa extends Model
{
	
	protected $fillable = ['imagen','idCentroUniversitario'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'comentarios_ubicaciones';

	public function centroUniversitario()
	{
		return $this->belongsTo('App\centroUniversitario');
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