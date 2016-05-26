<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Usuario extends Model
{
	
	protected $fillable = ['id','nombreU','correoU','passwordU','centro_universitario_id'];
	
	protected $hidden = ['created_at','updated_at'];
	
	protected $table = 'usuarios';

	public function centroUniversitario()
	{
		return $this->belongsTo('App\CentroUniversitario');
	}

	public function perfil()
	{
		return $this->hasOne('App\Perfil');
	}

	public function valoracionesProfesores()
	{
		return $this->hasMany('App\ValoracionProfesor');
	}

	public function horarios()
	{
		return $this->hasMany('App\Horario');
	}

	public function comentariosProductos()
	{
		return $this->hasMany('App\ComentarioProducto');
	}
	
	public function productos()
	{
		return $this->hasMany('App\Producto');
	}

	public function proyectos()
	{
		return $this->hasMany('App\IntegranteProyecto');
	}

	public function comentariosProyectos()
	{
		return $this->hasMany('App\ComentarioProyecto');
	}

	public function valoracionesUbicaciones()
	{
		return $this->hasMany('App\ValoracionUbicacion');
	}

	public function comentariosUbicaciones()
	{
		return $this->hasMany('App\ComentarioUbicacion');
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