<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNullableFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('questions', function (Blueprint $table) {
            $table->unsignedInteger('cid')->nullable()->change();
        });
        Schema::table('answers', function (Blueprint $table) {
            $table->string('answertext')->nullable()->change();
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
        Schema::table('questions', function (Blueprint $table) {
            $table->unsignedInteger('cid')->nullable(false)->change();
        });
        Schema::table('answers', function (Blueprint $table) {
            $table->string('answertext')->nullable(false)->change();
        });

    }
}
