<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Producto extends Model
{
	
	protected $fillable = ['idUsuario','fotoProducto','titulo','descripcion','precio'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'productos';
	
	public function comentariosProducto()
	{
		return $this->hasMany('App\ComentarioProducto');
	}	

	public function fotosProducto()
	{
		return $this->hasMany('App\FotoProducto');
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