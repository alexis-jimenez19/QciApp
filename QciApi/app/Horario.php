<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Horario extends Model
{
	
	protected $fillable = ['usuario_id','calendario_id','materia','inicialesMateria','profesor','horaInicio','horaFin','edificioSalon','calificacion'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'horarios';

	public function usuario()
	{
		return $this->belongsTo('App\Usuario');
	}

	public function calendario()
	{
		return $this->belongsTo('App\Calendario');
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