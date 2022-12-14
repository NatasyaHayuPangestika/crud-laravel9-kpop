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
        Schema::create('biodataanggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kpop');
            $table->string('jk_kpop');
            $table->date('dob_kpop');
            $table->string('asalgrup_kpop');           
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
        Schema::dropIfExists('biodataanggotas');
    }
};
