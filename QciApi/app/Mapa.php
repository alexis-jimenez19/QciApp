<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Mapa extends Model
{
	
	protected $fillable = ['id','imagen','centro_universitario_id'];
	
	protected $hidden = ['created_at','updated_at'];
	
	protected $table = 'mapas';

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