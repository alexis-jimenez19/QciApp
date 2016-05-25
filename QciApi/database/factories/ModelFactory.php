<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/*$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});*/
$factory->define(App\CentroUniversitario::class, function ($faker) {
    return [
        'nombre' => $faker->unique()->company,
        'siglas' => $faker->unique()->regexify('[A-Z]{5}'),     
    ];
});
$factory->define(App\Usuario::class, function ($faker) {
    return [
        'nombreU'               => $faker->unique()->userName,
        'correoU'               => $faker->unique()->email,
        'passwordU'             => $faker->password,     
        'centrouniversitario_id' => $faker->numberBetween($min = 1, $max = 5),
    ];
});

$factory->define(App\Noticia::class, function ($faker) {
    return [
        'titulo'                => $faker->realText($faker->numberBetween(10,50)),  
        'fecha'                 => $faker->date($format = 'Y-m-d', $max = 'now'),
        'descripcion'           => $faker->realText($faker->numberBetween(50,200)), 
        'imagen'                => $faker->imageUrl($width = 640, $height = 480), 
        'ubicacion'             => $faker->address, 
        'idautor'               => $faker->numberBetween($min = 1, $max = 30), 
        'centrouniversitario_id' => $faker->numberBetween($min = 1, $max = 5),     
    ];
});

$factory->define(App\Carrera::class, function ($faker) {
    return [
        'carrera' => $faker->sentence($nbWords = 3, $variableNbWords = true),     
    ];
});

$factory->define(App\Perfil::class, function ($faker) {
    return [
        //'usuario_id'       => $faker->numberBetween($min = 1, $max = 30), 
        'nombreCompleto'  => $faker->name,
        'foto'            => $faker->imageUrl($width = 640, $height = 480,'people'),
        'fechaNacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'semestre'        => $faker->numberBetween($min = 1, $max = 10),
        'carrera_id'       => $faker->numberBetween($min = 1, $max = 7), 
    ];
});

$factory->define(App\Profesor::class, function ($faker) {
    return [
        'foto'                  => $faker->imageUrl($width = 640, $height = 480,'people'),     
        'nombre'                => $faker->name,
        'division'              => $faker->word,
        'correo'                => $faker->companyEmail,
        'ubicacionOficina'      => $faker->regexify('[A-Z][1-40]'),
        'centrouniversitario_id' => $faker->numberBetween($min = 1, $max = 5),     
    ];
});

$factory->define(App\ProfesorMateria::class, function ($faker) {
    return [
        'profesor_id' => $faker->numberBetween($min = 1, $max = 20),     
        'materia'    => $faker->sentence($nbWords = 2, $variableNbWords = true),     
    ];
});

$factory->define(App\ValoracionProfesor::class, function ($faker) {
    return [
        'usuario_id'         => $faker->numberBetween($min = 1, $max = 30),     
        'profesormateria_id' => $faker->numberBetween($min = 1, $max = 60),     
        'valoracion'        => $faker->numberBetween($min = 1, $max = 5),     
    ];
});

$factory->define(App\ComentarioProfesor::class, function ($faker) {
    return [
        'profesormateria_id' => $faker->numberBetween($min = 1, $max = 60),     
        'comentario'        => $faker->realText($faker->numberBetween(50,200)),
        'usuario_id'         => $faker->numberBetween($min = 1, $max = 30),     
    ];
});

$factory->define(App\Calendario::class, function ($faker) {
    return [
        'ciclo' => $faker->unique()->regexify('201[1-6]{1}[A-B]'),
    	//'ciclo' => $faker->regexify('201+[1,2,3,4,5,6]+[A,B]'),
    ];
});

$factory->define(App\Horario::class, function ($faker) {
    return [
        'usuario_id'        => $faker->numberBetween($min = 1, $max = 30),     
        'calendario_id'     => $faker->numberBetween($min = 1, $max = 12),     
        'materia'          => $faker->sentence($nbWords = 2, $variableNbWords = true),     
        'inicialesMateria' => $faker->unique()->regexify('[A-Z]{2,5}'),
        //'inicialesMateria' => $faker->regexify('[A-Z]{2,5}'),
        'profesor'         => $faker->name,
        'horaInicio'       => $faker->time($format = 'H:i:s', $max = 'now'),
        'horaFin'          => $faker->time($format = 'H:i:s', $max = 'now'),
        'edificioSalon'    => $faker->regexify('[A-Z][1-40]'),
    ];
});

$factory->define(App\Producto::class, function ($faker) {
    return [
        'usuario_id'    => $faker->numberBetween($min = 1, $max = 30),     
        'fotoProducto' => $faker->imageUrl($width = 640, $height = 480,'food'),     
        'titulo'       => $faker->sentence($nbWords = 3, $variableNbWords = true),     
        'descripcion'  => $faker->realText($faker->numberBetween(50,300)),
        'precio'       => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 120000),
    ];
});

$factory->define(App\ComentarioProducto::class, function ($faker) {
    return [
        'usuario_id'  => $faker->numberBetween($min = 1, $max = 30),     
        'producto_id' => $faker->numberBetween($min = 1, $max = 20),     
        'comentario' => $faker->realText($faker->numberBetween(50,300)),
    ];
});

$factory->define(App\FotoProducto::class, function ($faker) {
    return [
        'producto_id' => $faker->numberBetween($min = 1, $max = 20),     
        'foto'       => $faker->imageUrl($width = 640, $height = 480,'food'),    
    ];
});

$factory->define(App\Proyecto::class, function ($faker) {
    return [
        'nombre'                => $faker->sentence($nbWords = 3, $variableNbWords = true),     
        'nombreEquipo'          => $faker->sentence($nbWords = 1, $variableNbWords = true),     
        'descripcion'           => $faker->realText($faker->numberBetween(50,300)),
        'usuario_id'        => $faker->numberBetween($min = 1, $max = 30),     
        'centrouniversitario_id' => $faker->numberBetween($min = 1, $max = 5),     

    ];
});

$factory->define(App\IntegranteProyecto::class, function ($faker) {
    return [
        'usuario_id'   => $faker->numberBetween($min = 1, $max = 30),     
        'proyecto_id'  => $faker->numberBetween($min = 1, $max = 20),     

    ];
});

$factory->define(App\ComentarioProyecto::class, function ($faker) {
    return [
        'comentario'  => $faker->realText($faker->numberBetween(50,300)),
        'usuario_id'   => $faker->numberBetween($min = 1, $max = 30),     
        'proyecto_id'  => $faker->numberBetween($min = 1, $max = 20),   
    ];
});


/*
Crear los tipos de ubicacion en el db seeder
$factory->define(App\TipoUbicacion::class, function ($faker) {
    return [
        'nombre' => $faker->companyName,   
    ];
});*/

$factory->define(App\Ubicacion::class, function ($faker) {
    return [
        'nombre'                => $faker->company,     
        'foto'                  => $faker->imageUrl($width = 640, $height = 480,'business'),    
        'centrouniversitario_id' => $faker->numberBetween($min = 1, $max = 5),     
        'tipoubicacion_id'       => $faker->numberBetween($min = 1, $max = 5),     
    ];
});

$factory->define(App\ValoracionUbicacion::class, function ($faker) {
    return [
        'usuario_id'   => $faker->numberBetween($min = 1, $max = 30),     
        'ubicacion_id' => $faker->numberBetween($min = 1, $max = 30),     
        'valoracion'  => $faker->numberBetween($min = 1, $max = 5),     
    ];
});

$factory->define(App\ComentarioUbicacion::class, function ($faker) {
    return [
        'usuario_id'   => $faker->numberBetween($min = 1, $max = 30),     
        'ubicacion_id' => $faker->numberBetween($min = 1, $max = 30),     
        'comentario'  => $faker->realText($faker->numberBetween(50,300)),
    ];
});

$factory->define(App\Mapa::class, function ($faker) {
    return [
        'imagen'                => $faker->imageUrl($width = 640, $height = 480,'city'),    
        'centrouniversitario_id' => $faker->unique()->numberBetween($min = 1, $max = 5),     
        //'centrouniversitario_id' => $faker->numberBetween($min = 1, $max = 5),     
    ];
});