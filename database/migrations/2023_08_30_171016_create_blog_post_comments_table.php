<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post_comments', function (Blueprint $table) {
        $table->id();
        $table->BigInteger('post_id')->unsigned(); 
        $table->BigInteger('user_id')->unsigned(); 
        $table->text('content'); 

        $table->timestamps();

        // Foreign key relationships
        $table->foreign('post_id')->references('id')->on('blog_posts')->cascadeOnUpdate()->cascadeOnDelete();
        $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_post_comments');
    }
}
