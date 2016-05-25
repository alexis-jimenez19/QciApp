<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class TipoUbicacion extends Model
{
	
	protected $fillable = ['nombre'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'tipos_ubicaciones';

	public function ubicaciones()
	{
		return $this->hasMany('App\Ubicacion');
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