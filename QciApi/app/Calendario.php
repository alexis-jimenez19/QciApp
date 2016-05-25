<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Calendario extends Model
{
	
	protected $fillable = ['ciclo'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'calendarios';

	public function horarios()
	{
		return $this->hasMany('App\Horario');
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