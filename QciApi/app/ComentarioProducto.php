<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ComentarioProducto extends Model
{
	
	protected $fillable = ['idUsuario','idProducto','comentario'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'comentarios_productos';
	
	public function producto()
	{
		return $this->belongsTo('App\Producto');
	}

	public function usuario()
	{
		return $this->belongsTo('App\Usuario');
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