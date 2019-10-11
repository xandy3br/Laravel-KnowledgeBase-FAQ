<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');

            $table->longText('short_text')->nullable();

            $table->longText('full_text')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
