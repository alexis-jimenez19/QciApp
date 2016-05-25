<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Usuario extends Model
{
	
	protected $fillable = ['nombreU','correoU','idCentroUniversitario'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'usuarios';

}
/*
	public function ()
	{
		return $this->hasMany('App\ ');
		return $this->belongsToMany('App\ ');
		return $this->belongsTo('App\ ');
	}
*/