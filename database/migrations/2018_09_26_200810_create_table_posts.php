<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('posts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title_pl');
            $table->string('title_en');
            $table->longText('text_pl');
            $table->longText('text_en');
            $table->string('photo_link');
            $table->integer('section_id');
            $table->softDeletes();
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
}
