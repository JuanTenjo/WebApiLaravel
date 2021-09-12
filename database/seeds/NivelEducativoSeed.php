<?php

use Illuminate\Database\Seeder;
use App\Models\NivelEducativo;

class NivelEducativoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $NivelEducativo = array(
            [
                'NivelEducativo' => 'No tiene'
            ],
            [
                'NivelEducativo' => 'Bachiller'
            ],
            [
                'NivelEducativo' => 'Tecnico'
            ],
            [
                'NivelEducativo' => 'Tecnologo'
            ],
            [
                'NivelEducativo' => 'Profecional'
            ],
            [
                'NivelEducativo' => 'Especializado'
            ],
            [
                'NivelEducativo' => 'Maestria'
            ],
            [
                'NivelEducativo' => 'Doctorado'
            ]
        );
        foreach ($NivelEducativo as $NivelEducativos ) {
            NivelEducativo::updateOrCreate($NivelEducativos);
        }
    }
}
