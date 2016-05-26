<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Producto extends Model
{
	
	protected $fillable = ['id','usuario_id','fotoProducto','titulo','descripcion','precio'];
	
	protected $hidden = ['created_at','updated_at'];
	
	protected $table = 'productos';
	
	public function usuario()
	{
		return $this->belongsTo('App\Usuario');
	}	

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