<?php

use Illuminate\Database\Seeder;
use App\Models\TipoDocumen;
class TipoDocumenSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Tipo_Documen = array(
            [
                'TipoDocumen' => 'cedula'
            ],
            [
                'TipoDocumen' => 'Tarjeta de identidad'
            ],
            [
                'TipoDocumen' => 'Identificacion Extranjera'
            ]
        );
        foreach($Tipo_Documen as $TipoDocumens ) {
            TipoDocumen::updateOrCreate($TipoDocumens);
        }
    }
}
