<?php

use Illuminate\Database\Seeder;
use App\Models\personas;
class personasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personasData=array(
            [
                'identificacion' => '12345678532',
                'nombre' => 'Juan Camilo Narvaez',
                'apellido' => 'Narvaez Sanchez',
                'direccion' => 'carr 6w#89-90 ',
                'telefono' => '3223280873',
                'email' => 'camilo@narvaez.com',
                'estado' => true,
                'tipo_documens_id' => 1,
                'profecions_id' => 1,
                'nivel_educativos_id' => 3
            ],
            [
                'identificacion' => '1192761621',
                'nombre' => 'Juan Diego',
                'apellido' => 'Pimentel Tenjo',
                'direccion' => 'carr 6w#89-90 ',
                'telefono' => '3144147105',
                'email' => 'tenjo2001@gmail.com',
                'estado' => true,
                'tipo_documens_id' => 1,
                'profecions_id' => 2,
                'nivel_educativos_id' => 4
            ],
            [
                'identificacion' => '12345678532',
                'nombre' => 'Felipe',
                'apellido' => 'Pimentel',
                'direccion' => 'carr 6w#89-90 ',
                'telefono' => '329573483',
                'email' => 'felipeilo@felipe.com',
                'estado' => true,
                'tipo_documens_id' => 1,
                'profecions_id' => 1,
                'nivel_educativos_id' => 3
            ],
            [
                'identificacion' => '108213834',
                'nombre' => 'Natalia',
                'apellido' => 'Pimentel',
                'direccion' => 'carr 6w#89-90 ',
                'telefono' => '3223280873',
                'email' => 'natalia@gmail.com',
                'estado' => true,
                'tipo_documens_id' => 1,
                'profecions_id' => 1,
                'nivel_educativos_id' => 3
            ],
            [
                'identificacion' => '1934584924',
                'nombre' => 'Valentina',
                'apellido' => 'Pimentel',
                'direccion' => 'carr 6w#89-90 ',
                'telefono' => '3223280873',
                'email' => 'valentina@valentina.com',
                'estado' => true,
                'tipo_documens_id' => 1,
                'profecions_id' => 1,
                'nivel_educativos_id' => 4
            ],
            [
                'identificacion' => '12345678532',
                'nombre' => 'Angelica',
                'apellido' => 'Ramos',
                'direccion' => 'carr 6w#89-90 ',
                'telefono' => '3223280873',
                'email' => 'Angelica@ramos.com',
                'estado' => true,
                'tipo_documens_id' => 1,
                'profecions_id' => 1,
                'nivel_educativos_id' => 3
            ],
            [
                'identificacion' => '12345678532',
                'nombre' => 'Yeilin',
                'apellido' => 'Toledo',
                'direccion' => 'carr 6w#89-90 ',
                'telefono' => '3223280873',
                'email' => 'yeilin@yeilin.com',
                'estado' => true,
                'tipo_documens_id' => 1,
                'profecions_id' => 1,
                'nivel_educativos_id' => 1
            ],
            [
                'identificacion' => '12345678532',
                'nombre' => 'Jaime',
                'apellido' => 'Sanchez',
                'direccion' => 'cra 6w#89-90 ',
                'telefono' => '3223280873',
                'email' => 'jaime@jaime.com',
                'estado' => true,
                'tipo_documens_id' => 1,
                'profecions_id' => 1,
                'nivel_educativos_id' => 3
            ],
            [
                'identificacion' => '12345678532',
                'nombre' => 'Pipe',
                'apellido' => 'Trujillo',
                'direccion' => 'carr 6w#89-90 ',
                'telefono' => '3223280873',
                'email' => 'pipe@pipe.com',
                'estado' => true,
                'tipo_documens_id' => 1,
                'profecions_id' => 1,
                'nivel_educativos_id' => 3
            ],
        );
        foreach ($personasData as $persona ) {
            personas::updateOrCreate($persona);
        }
    }
}
