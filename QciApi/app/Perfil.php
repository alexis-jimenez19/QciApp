<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Perfil extends Model
{
	
	protected $fillable = [''];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'perfiles';

}
/*
	public function ()
	{
		return $this->hasMany('App\ ');
		return $this->belongsToMany('App\ ');
		return $this->belongsTo('App\ ');
	}
*/