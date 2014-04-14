<?php

use Illuminate\Database\Migrations\Migration;

class CreateArticlesTagsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('articles_tags', function ($table) {

            $table->increments('id');
            $table->integer('article_id')->unsigned()->index();
            $table->integer('tag_id')->unsigned()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::drop('articles_tags');
    }
}