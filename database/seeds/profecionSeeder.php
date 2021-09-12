<?php

use Illuminate\Database\Seeder;
use App\Models\profecions;

class profecionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profecionsData = array(
            [
                'profecions' => 'Obrero'
            ],
            [
                'profecions' => 'Ingeniero'
            ],
            [
                'profecions' => 'Plomero'
            ],
            [
                'profecions' => 'Abogado'
            ],
            [
                'profecions' => 'Estudiante'
            ],
            [
                'profecions' => 'Bombero'
            ],
            [
                'profecions' => 'Medico'
            ],
            [
                'profecions' => 'Veterinario'
            ],
            [
                'profecions' => 'Docente'
            ],
            [
                'profecions' => 'Otro'
            ]
        );

        foreach ($profecionsData as $profecion) {
            profecions::updateOrCreate($profecion);
        }

    }
}
