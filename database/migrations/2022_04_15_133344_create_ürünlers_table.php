<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateÜrünlersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ürünlers', function (Blueprint $table) {
            $table->string('ürünadı');
            $table->string('fiyat');
            $table->string('tür');
            $table->string('cinsiyet');
            $table->string('malzeme');
            $table->string('resim');
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
        Schema::dropIfExists('ürünlers');
    }
}
