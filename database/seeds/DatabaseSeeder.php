<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        //Si creamos un nuevo archivo debemos correr composer dump-autoload para que composer tome esos nuevos archivos
        $this->call(UserSeed::class);
        $this->call(TipoDocumenSeed::class);
        $this->call(NivelEducativoSeed::class);
        $this->call(profecionSeeder::class);
        $this->call(personasSeeder::class);
    }
}
