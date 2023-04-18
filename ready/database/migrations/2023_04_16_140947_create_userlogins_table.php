<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userlogins', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('user_name');
            $table->string('user_branch');
            $table->string('user_email');
            $table->string('user_pass');
            $table->string('user_mobile');
            $table->integer('year');
            $table->integer('college_id');
            $table->string('college_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('skills');
            $table->text('hobby');
            $table->text('social_links')->nullable(true);
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
        Schema::dropIfExists('userlogins');
    }
};
