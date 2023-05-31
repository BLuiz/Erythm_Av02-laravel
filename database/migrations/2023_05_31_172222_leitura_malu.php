<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LeituraMaLu', function(Blueprint $table){
            $table->id();
            $table->date('DataLeitura');
            $table->string('HoraLeitura',20);
            $table->float('ValorSensor');
            $table->foreignId('sensor_id')->nullable()->constrained('sensor')->default(null);
            $table->foreignId('mac_id')->nullable()->constrained('mac')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
