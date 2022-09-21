<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('smers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naziv_smera',25);
            $table->string('nivo_studija',25);
        });

        Schema::create('prijavas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ime', 20);
            $table->string('prezime', 20);
            $table->string('status', 20);

            $table->unsignedBigInteger('smer_id');
            $table->foreign('smer_id')->references('id')->on('smers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prijavas');
        Schema::dropIfExists('smers');
    }
};
