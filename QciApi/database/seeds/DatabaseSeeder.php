<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Calendario;
use App\Carrera;
use App\CentroUniversitario;
use App\ComentarioProducto;
use App\ComentarioProfesor;
use App\ComentarioProyecto;
use App\ComentarioUbicacion;
use App\FotoProducto;
use App\Horario;
use App\IntegranteProyecto;
use App\Mapa;
use App\Noticia;
use App\Perfil;
use App\Producto;
use App\Profesor;
use App\ProfesorMateria;
use App\Proyecto;
use App\TipoUbicacion;
use App\Ubicacion;
use App\Usuario;
use App\ValoracionUbicacion;
use App\ValoracionProfesor;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Calendario::truncate();
		Carrera::truncate();
		CentroUniversitario::truncate();
		ComentarioProducto::truncate();
		ComentarioProfesor::truncate();
		ComentarioProyecto::truncate();
		ComentarioUbicacion::truncate();
		FotoProducto::truncate();
		Horario::truncate();
		IntegranteProyecto::truncate();
		Mapa::truncate();
		Noticia::truncate();
		Perfil::truncate();
		Producto::truncate();
		Profesor::truncate();
		ProfesorMateria::truncate();
		Proyecto::truncate();
		TipoUbicacion::truncate();
		Ubicacion::truncate();
		Usuario::truncate();
		ValoracionUbicacion::truncate();
		ValoracionProfesor::truncate();
		DB::table('tipos_ubicaciones')->insert(['nombre'=>'Establecimientos']);
		DB::table('tipos_ubicaciones')->insert(['nombre'=>'Papelerias']);
		DB::table('tipos_ubicaciones')->insert(['nombre'=>'Auditorios']);
		DB::table('tipos_ubicaciones')->insert(['nombre'=>'Bibliotecas']);
		DB::table('tipos_ubicaciones')->insert(['nombre'=>'Laboratorios']);
		factory(Calendario::class,12)->create();
		factory(Carrera::class,7)->create();
		factory(CentroUniversitario::class,5)->create();
		factory(ComentarioProducto::class,250)->create();
		factory(ComentarioProfesor::class,250)->create();
		factory(ComentarioProyecto::class,250)->create();
		
		factory(FotoProducto::class,340)->create();
		factory(Horario::class,130)->create();
		factory(IntegranteProyecto::class,46)->create();
		factory(Mapa::class,5)->create();
		factory(Noticia::class,50)->create();
		//factory(Perfil::class,29)->create();
		factory(Producto::class,20)->create();
		factory(Profesor::class,20)->create();
		factory(ProfesorMateria::class,30)->create();
		factory(Proyecto::class,20)->create();
		factory(Ubicacion::class,30)->create();
		
		factory(Usuario::class,30)
           ->create()
           ->each(function($u) {
                $u->perfil()->save(factory(Perfil::class)->make());
            });
           
		factory(ValoracionUbicacion::class,30)->create();
		factory(ValoracionProfesor::class,30)->create();
		factory(ComentarioUbicacion::class,250)->create();
//DB::table('subcategorias')->insert(['nombre_sc'=>'Instrumental/Jazz','categoria_id'=>'2']);
		//factory(TipoUbicacion::class,)->create();
		/*
		factory(BoletoCliente::class,100)->create()->each(function($boletocliente){
			$boletocliente->clientes()->attach(array_rand(range(1,50),4));
		});
		*/

	}

}
