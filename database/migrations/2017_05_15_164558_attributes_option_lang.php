<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AttributesOptionLang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes_option_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->bolean('attributes_option_id');
            $table->string('title');
            $table->binary('remarks');
            $table->binary('language_id');

            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes_option_lang');
    }
}
