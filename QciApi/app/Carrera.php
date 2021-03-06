<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Carrera extends Model
{
	
	protected $fillable = ['id','nombre'];
	
	protected $hidden = ['created_at','updated_at'];
	
	protected $table = 'carreras';
	
	public function perfiles()
	{
		return $this->hasMany('App\Perfil');
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