<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectImagesTable extends Migration
{
    public function up()
    {
        Schema::create('project_images', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('thumbnail');
            $table->uuid('treatment_id'); 
            $table->timestamps();
    
            $table->foreign('treatment_id')
                ->references('id')
                ->on('treatments')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_images');
    }
}
