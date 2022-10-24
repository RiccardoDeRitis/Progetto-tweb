<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        \DB::table('users')->insert([
            ['Nome' => 'Riccardo', 'Cognome' => 'De Ritis', 'Telefono' => '3245578123', 'Città' => 'Ancona', 'Indirizzo' => 'Via Roma 55', 'Anni' => '22', 'Codice_Fiscale' => 'DRTZED11T03E418C', 'email' => 'io@gmail.com', 'password' => Hash::make('11111111'), 'Visibilità' => 's', 'Descrizione' => 'Ciao sono Riccardo'],
            ['Nome' => 'Tonino', 'Cognome' => 'Di Placido', 'Telefono' => '3245578123', 'Città' => 'Ancona', 'Indirizzo' => 'Via Giovanni 55', 'Anni' => '22', 'Codice_Fiscale' => 'DRTZED11T03E418C', 'email' => 'tonino@gmail.com', 'password' => Hash::make('11111111'), 'Visibilità' => 's', 'Descrizione' => 'Ciao sono Tonino'],
            ['Nome' => 'Christian', 'Cognome' => 'Parente', 'Telefono' => '3245578123', 'Città' => 'Ancona', 'Indirizzo' => 'Via Giacomo 55', 'Anni' => '22', 'Codice_Fiscale' => 'DRTZED11T03E418C', 'email' => 'parente@gmail.com', 'password' => Hash::make('11111111'), 'Visibilità' => 's', 'Descrizione' => 'Ciao sono Parente'],
            ['Nome' => 'Tonino', 'Cognome' => 'De Ritis', 'Telefono' => '3245578123', 'Città' => 'Ancona', 'Indirizzo' => 'Via Franco 55', 'Anni' => '22', 'Codice_Fiscale' => 'DRTZED11T03E418C', 'email' => 'franco@gmail.com', 'password' => Hash::make('11111111'), 'Visibilità' => 's', 'Descrizione' => 'Ciao sono Franco'],
        ]);
    }
}
