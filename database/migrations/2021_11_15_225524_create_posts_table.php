<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            /* column:string
               column:enum
               column:biginteger
               column:text*/
            $table->string('publication')->nullable()->default('text');
            $table->enum('state', ['Publicado', 'Rechazado','Revisión','Recibido'])->nullable()->default('Recibido');
            $table->text('publication_content')->nullable();
            $table->bigInteger('category_id')->nullable()->unsigned();
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
        Schema::dropIfExists('posts');
    }
}
