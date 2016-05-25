<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class FotoProducto extends Model
{
	
	protected $fillable = ['producto_id','foto'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'fotos_productos';

	public function producto()
	{
		return $this->belongsTo('App\Producto');
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