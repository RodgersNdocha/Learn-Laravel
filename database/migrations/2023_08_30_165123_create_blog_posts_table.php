<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned();
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->bigInteger('blog_category_id')->unsigned();
            $table->foreign('blog_category_id')->on('blog_categories')->references('id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('title');
            $table->string('tags')->nullable();
            $table->string('thumbnail');
            $table->longtext('content');
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
        Schema::dropIfExists('blog_posts');
    }
}
