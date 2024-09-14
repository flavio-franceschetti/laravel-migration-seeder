<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 200);
            $table->tinyInteger('night_n')->unsigned();
            $table->decimal('price', $precision = 8, $scale = 2)->unsigned();
            $table->date('departure_date');
            $table->string('included_services', 200);
            $table->timestamps();
        });
    }

        // Destinazione: La città o il paese di destinazione del pacchetto.
        // Durata: Numero di giorni e notti inclusi nel pacchetto.
        // Prezzo: Costo totale del pacchetto viaggio per persona o per gruppo.
        // Data di partenza: La data e l'orario in cui inizia il viaggio.
        // Tipo di alloggio: Descrizione del tipo di alloggio incluso (hotel, appartamento, ecc.).
        // Inclusioni: Elenco dei servizi inclusi (volo, pasti, escursioni, trasferimenti, ecc.).

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_packages');
    }
};
